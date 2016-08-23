#!/usr/bin/env python
# -*- coding:utf-8 -*-
'deco.py'

#11.2 例子
from datetime import datetime
def tsFunc(func):
    def wrappedFunc():
        print("%s %s" %(func.__name__,datetime.now()))
        return func()
    return wrappedFunc

@tsFunc
def myfun():
    print('myfun is call')


myfun()
