#!/usr/bin/env python
#coding:utf-8
'sum.py'
from functools import reduce
def prod(x,y):
    return x * y

ret = reduce(prod,[1,2,3])
print(ret)

