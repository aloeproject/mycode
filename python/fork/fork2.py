#!/usr/bin/env python
# -*- coding:utf-8 -*-
'fork2.py'


from multiprocessing import Process

import os

def run_proc(name):
    print ("Run child process (%s) %s" % (name,os.getpid()))

print ("parent process %s" % os.getpid())
for i in range(5):
    p = Process(target=run_proc,args=('test',))
    p.start()
    p.join()

