#!/usr/bin/env python
# -*- coding:utf-8 -*-
'ex_taobao.py'


import urllib.request
from urllib.error import URLError
import re

header = {
    'Accept-Language':'zh-CN,zh;q=0.8',
    'Cache-Control':'max-age=0',
    'Connection':'keep-alive',
    'User-Agent':'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36'
}

class MMSpider:

    def __init__(self):
        self.siteURL = 'http://mm.taobao.com/json/request_top_list.htm'

    def getPage(self,pageIndex):
        url = self.siteURL + '?page=' + str(pageIndex)
        print(url)
        try:
            req = urllib.request.Request(url,headers=header)
            res = urllib.request.urlopen(req)
            data = res.read().decode('gbk')
        except URLError as e:
            print(e.code)
            print(e.reason)
        return data

    def getContents(self,pageIndex):
        page = self.getPage(pageIndex)
        pattern = re.compile('<div class="list-item".*?pic-word.*?<a href="(.*?)".*?<img src="(.*?)".*?<a class="lady-name.*?>(.*?)</a>.*?<strong>(.*?)</strong>.*?<span>(.*?)</span>',re.S)
        items = re.findall(pattern,page)
        for item in items:
            print("姓名:"+item[2])
            print("年龄:"+item[3])
            print("图片:"+self.getImageUrl(item[1]))

    def getImageUrl(self,url):
        url = 'https:' + url
        url = url.replace('60x60','600x600')
        return url


si = MMSpider()
si.getContents(1)
