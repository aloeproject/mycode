#!/usr/bin/env python
# -*- coding:utf-8 -*-
'begin_end.py'

from datetime import datetime


def begin_end(func):
    def wrappendFunc():
        print('begin call')
        func()
        print('end call')
    return wrappendFunc

@begin_end
def log():
    print(datetime.now())


log()
