#!/usr/bin/env python
#coding:utf-8
'idcheck.py'

import string;

alphas = string.letters + '_'
num = string.digits

myInput = raw_input("place input string ");

if myInput[0] not in alphas:
    print "不是字符开头"
else:
    for otherCode in myInput[1:]:
        if otherCode not in alphas + num:
            print "不是合法字符"


