#!/usr/bin/env python
#coding:utf-8
'if.py'


height = 1.75
weight = 77

bmi = weight / (height * height);

if bmi < 18.5:
    print("轻")
elif bmi >= 18.5 and bmi < 25:
    print ("正常")
elif bmi >= 25 and bmi < 28:
    print("过重")
elif  bmi >= 28 and bmi < 32:
    print("肥胖")
else:
    print("很胖")
