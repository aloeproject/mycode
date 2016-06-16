#!/usr/bin/env python
# -*- coding:utf-8 -*-
'dir.py'

#引入系统包
import os

#查看绝对路径
mydir = os.path.abspath('.')

#把目录的完整路径打印出来,主要用于数据拼接

print(os.path.join(mydir,'joindir'))

#创建一个目录 判断如果不存在就创建目录
if os.path.exists('mydir1')==False:
    os.mkdir('mydir1')


#删除一个目录
#os.rmdir('mydir2')

#文件重新命名
#os.rename('目标文件','源文件')
#文件删除
#os.remove('test.py')
#获得文件扩展名
path = os.path.split('/www/python.py');
#他是得到文件和扩展名两部分
# ('/www','python.py')
print(path)

ext = os.path.splitext('/www/python.py')
print(ext)
# ('/www/python','.py')

