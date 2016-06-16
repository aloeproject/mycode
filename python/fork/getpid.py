#!/usr/bin/env python
# -*- coding:utf-8 -*-
'getpid.py'

import os

print ("process (%s) start" % os.getpid())

pid = os.fork()

if pid==0:
    print('i am child process (%s) my parent is (%s)\n' % (os.getpid(),os.getppid()))
else:
    print("i (%s) just created a child process (%s)\n" % (os.getpid(),pid))
