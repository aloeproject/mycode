#!/usr/bin/env python
# -*- coding:utf-8 -*-
'zsq.py'
#装饰器的使用

class Screen(object):
    @property
    def width(self):
        return self._width

    @property
    def height(self):
        return self._height

    @property
    def resolution(self):
        return self.width * self.height

    @width.setter
    def width(self,value):
        self._width = value
        
    @height.setter
    def height(self,value):
        self._height = value

    
    

a = Screen()
a.width = 10
a.height = 2
print(a.resolution)
a.resolution = 10

#a.resolution = 15
#print(a.resolution)

