#!/usr/bin/env python
#coding:utf-8
'def2.py'

def person(name, age, *, city, job):
    print(name, age, city, job)

person('zhangsan',30,city='beijing',job='cxy')

#传人不是指定的city 系统出错
#person('zhangsan',30,city1='beijing',job='cxy')

#设置默认参数 city
def person1(name, age, *, city='shanghai', job):
    print(name, age, city, job)

#设置默认参数 job  位置可以挑换
def person2(name, age, *, city, job='worker1'):
    print(name, age, city, job)

person1('zhangsan',30,job='cxy')

person2('zhangsan',30,city='guiyang')


def person3(name, age,  *args,**kw):
    print(name, age, kw,args)

def person(name,age,*args,*,city):
   print(name,age,args,city) 
