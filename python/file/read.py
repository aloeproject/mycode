#!/usr/bin/env python
# -*- coding:utf-8 -*-
'read.py'

f = open('content','r')
#read的一个参数是设置读取的大小，防止读取大文件全部放入内存中挂掉
content = f.read(200)
print(content)
f.close();
