#!/usr/bin/env python
# -*- coding:utf-8 -*-
'attr.py'


class MyClass(object):
    def __init__(self):
        self._x = 3;
    def power(self):
        return self._x * self._x
    
obj = MyClass()

print(obj._x)

print(hasattr(obj,'y'))

print(setattr(obj,'y',10))

print(hasattr(obj,'y'))

print(getattr(obj,'y'))
