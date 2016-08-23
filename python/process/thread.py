#!/usr/bin/env python
# -*- coding:utf-8 -*-
'threading.py'

import threading
#创建一个全局变量
local_school = threading.local();

def process_student():
    std = local_school.student;
    print("hello %s in %s",std,threading.current_thread().name);

def process_thread(name):
    local_school.student = name;
    process_student();

t1 = threading.Thread(target=process_thread,args=('tom',),name='tread-A')
t2 = threading.Thread(target=process_thread,args=('jim',),name='tread-B')

t1.start();
t2.start();
t1.join();
t2.join();

