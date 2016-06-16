#!/usr/bin/env python
# -*- coding:utf-8 -*-
'Student.py'

class Student(object):
    def __init__(self,name,score):
        self._name = name;
        self._score = score;

    def getScore(self):
        scoreStr = ''
        if (self._score >= 90):
            scoreStr = "A"
        elif (self._score >= 80):
            scoreStr = "B"
        elif (self._score >= 60):
            scoreStr = "C"
        else:
            scoreStr = "D"

        print("%s score is %d" % (self._name,self._score));


a = Student('zhangsan',85);
a.getScore()
print(a._name)
