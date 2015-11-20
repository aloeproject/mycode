#!/usr/bin/env python
#coding:utf-8
'generator1.py'

def fun1(n):
    if (n == 1):
        return 1;
    if (n == 2):
        return 2;
    return fun1(n-2) + fun1(n-1)

i =fun1(24)
print(i)
