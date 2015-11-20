#!/usr/bin/env python
#coding:utf-8
'ucfirst.py'
 #for s in str:
        #c = ord(s)
        #if c >= 65 and c <= 90:
   
l = ['adam', 'LISA', 'barT']

def normalize(string):
    s = string.lower()
    l = list(s)
    l[0] = l[0].upper()
    return ''.join(l);

ret = list(map(normalize,l))
print(ret)
