#!/usr/bin/env python
# -*- coding:utf-8 -*-
'k_v.py'


list1 = [1,2,3,4,5,6]
list2 = ['a','b','c','d','e','g']

kv = {}
listLen = len(list1)
for item in range(0,listLen):
    #kv[list1.pop(0)] = list2.pop(0)
    k = list1.pop(0)
    val = list2.pop(0)
    kv[k] = val
    #kv.update({k:val})

print(kv)
