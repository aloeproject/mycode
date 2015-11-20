#!/usr/bin/env python
#coding:utf-8
'zsq.py'

#装饰器

def zsq(func):
    #接受各种参数
    def wrapper(*args,**kw):
        print ("function start")
        func(*args,**kw)
        print ("function end")
    return wrapper

@zsq
def myfun(x,y):
    print ("%s + %s = %s" % (x,y,(x*y)))


myfun(1,3)
#相当于
#myfun = zsq(myfun)
