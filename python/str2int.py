#!/usr/bin/env python
#coding:utf-8
'str2int.py'

from functools import reduce
def fn(x,y):
    return x*10 + y
def str2num(s):
    #相当于dict [key]
    return {'0': 0, '1': 1, '2': 2, '3': 3, '4': 4, '5': 5, '6': 6, '7': 7, '8': 8, '9': 9}[s];

ret = map(str2num,'123')
print(list(ret))

res = reduce(fn,map(str2num,'123'))
print(res)


def char2num(s):
    return {'0': 0, '1': 1, '2': 2, '3': 3, '4': 4, '5': 5, '6': 6, '7': 7, '8': 8, '9': 9}[s]
#函数可以进一步缩减
def str2int(s):
    return reduce(lambda x, y: x * 10 + y, map(char2num, s))
