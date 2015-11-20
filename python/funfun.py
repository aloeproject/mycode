#!/usr/bin/env python
#coding:utf-8
'funfun.py'


def funfun(fun):
    def wrapper(*args,**kw):
        return fun(*args,**kw)
    return wrapper


