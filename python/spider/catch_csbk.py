#!/usr/bin/env python
# -*- coding:utf-8 -*-
'catch_csbk.py'

import urllib.request
import urllib.parse
import hashlib
import MySQLdb
from urllib.error import URLError
import re
import time

header = {
    'Accept-Language':'zh-CN,zh;q=0.8',
    'Cache-Control':'max-age=0',
    'Connection':'keep-alive',
    'User-Agent':'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36'
}



def getContent(page):
    url = 'http://www.qiushibaike.com/hot/page'
    url = "%s/%d/" % (url,page)
    try:
        req = urllib.request.Request(url,headers=header)
        res = urllib.request.urlopen(req)
        data = res.read().decode('utf-8')
    except URLError as e:
        print(e.code)
        print(e.reason)
    return data


def getData(str):
    #re.compile('<div.*author clearfix">*?<a.*?<img.*?>(.*?)</a>.*?<div.*?',re,s>); 
    pattern = re.compile('<div.*?author clearfix">.*?<img src="(.*?)".*?<h2>(.*?)</h2>.*?<div class="content">(.*?)</div>.*?<i class="number">(.*?)</i>',re.S); 
    dataList = re.findall(pattern,str)
    result = []
    for item in dataList:
        result.append(item)

    return result

def getMD5(str):
    return hashlib.md5(str.encode(encoding='UTF-8')).hexdigest()

def insertSql(arr):
    conn = MySQLdb.connect('localhost','root','aliyun123','test',charset='utf8')
    cursor = conn.cursor()
    cursor.execute('SET NAMES UTF8')
    for item in ret:
        content = item[2].strip()
        hash_key = getMD5(content)
        sql = "INSERT INTO my_joke(hash_key,content,positive_num) values('%s','%s','%s')" % (hash_key,content,item[3])
        #print(sql)
        #continue
        try:
            cursor.execute(sql)
            conn.commit()
        except MySQLdb.Error as e:
            print(e)
            conn.rollback()
            continue
    conn.close()

for page in range(5,100):
    str = getContent(page)
    ret = getData(str)
    insertSql(ret)
    print("当前爬取页(%s)" % (page))
    time.sleep(2)
