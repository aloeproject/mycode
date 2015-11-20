#!/usr/bin/env python
#coding:utf-8
'anyParams.py'

def anyParams(*args,**kw):
    print (args)
    print (kw)

anyParams(1,2,3,4,a='123');
