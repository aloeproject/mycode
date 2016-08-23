
#encoding='UTF-8'
__author__ = 'User'

import gzip
import re
import http.cookiejar
import urllib.request
import urllib.parse

def ungzip(data):
    try:
        print("正在解压")
        data = gzip.decompress(data)
        print('解压完毕')
    except:
        print('没有压缩，不需要解压')

    return data

def getXSRF(data):
    cer = re.compile('name=\"_xsrf\" value=\"(.*)\"',flags=0)
    strlist = cer.findall(data)
    if (len(strlist)==0):
        print('xsrf no exist')
    return strlist[0]

def getOpener(head):
    #获取当前页面的cookie
    cj = http.cookiejar.CookieJar()
    pro = urllib.request.HTTPCookieProcessor(cj)
    opener = urllib.request.build_opener(pro)
    header = []
    for key,value in head.items():
        elem = (key,value)
        header.append(elem)
    opener.addheaders = header
    return opener

header = {
    'Accept-Language':'zh-CN,zh;q=0.8',
    'Cache-Control':'max-age=0',
    'Connection':'keep-alive',
    'Host':'www.zhihu.com',
    'Referer':'https://www.zhihu.com/',
    'User-Agent':'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36'
}

url = 'https://www.zhihu.com/'
opener = getOpener(header)
op = opener.open(url)
data = op.read()
data = ungzip(data)
xsrf = getXSRF(data.decode())

url ='https://www.zhihu.com/login/email'
email = 'lk_qmail@foxmail.com'
password = 'lk@60132565'
postDict = {
    '_xsrf':xsrf,
    'email':email,
    'password':password,
    'remember_me':True,
}

postData = urllib.parse.urlencode(postDict).encode()
op = opener.open(url,postData)
data =  op.read()
print(data.decode())
