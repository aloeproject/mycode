#!/usr/bin/env python
#coding:utf-8
'def1.py'


def point(x,y):
    x = x + 1
    y = y + 1
    return x,y



def myappend(l = []):
    l.append('END')
    return l

print(myappend())
print(myappend())
