#!/usr/bin/env python
# -*- coding:utf-8 -*-
'in_fun.py'

#内部函数

def foo():
    def bor():
        print("bor call")
    bor();
    print('foo call')

foo();
bor();#这里会报错bor not define
