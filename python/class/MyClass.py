#!/usr/bin/env python
# -*- coding:utf-8 -*-
'MyClass.py'


class MyClass():
    def __init__(self,name,sex):
        #定义一个私有属性
        self.__name = name;
        self.__sex = sex;
        print('init')
    
    def getName(self):
        return self.__name;

    def getSex(self):
        return self.__sex;
    
    def show(self):
        print('show');


a = MyClass('haha','man');
print(a.getName())
print(a.getSex())
