#!/usr/bin/env python
# -*- coding:utf-8 -*-
'Extends.py'


#python 的继承

class Animal():
    def run(self):
        print('run run')
    def speck(self):
        print('speck')

#继承动物类
class Dog(Animal):
    def run(self):
        print('run +2')
#基础动物类
class Cat(Animal):
    def run(self):
        print('run +5')

    def __len__(self):
        return 10;

    def mylower(self,str):
        return str.lower();

c = Cat()
c.run();
c.speck()

#print(dir(c))

print(len(c))
print(c.__len__())
print(c.mylower('ABC'))

