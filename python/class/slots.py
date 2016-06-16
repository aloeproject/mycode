#!/usr/bin/env python
# -*- coding:utf-8 -*-
'slots.py'

class Myclass(object):
    #name = 'class'
    __slots__ = ('age','sex')

def setAge(self,age):
    self.age = age

Myclass.setAge = setAge;

a = Myclass()
a.setAge(4)
print(a.age)


#print(a.name)
a.sex = 1;
a.name = 4 #'Myclass' object has no attribute 'name'
