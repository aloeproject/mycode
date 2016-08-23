#!/usr/bin/env python
# -*- coding:utf-8 -*-
'strtotime.py'

from datetime import datetime,timedelta

dt = datetime(2016,6,23,7,8)
tstamp = dt.timestamp()

#1466636880.0
#2016-06-23 07:08:00

print(tstamp)
print(datetime.fromtimestamp(tstamp))

cday = datetime.strptime('20160601 01:02:11','%Y%m%d %H:%M:%S')
print(tstamp)

print(type(dt))
print(dt.strftime('%Y-%m-%d %H:%M:%S'))

#时间加减
print(dt + timedelta(hours=10))
print(dt + timedelta(hours=-10))
print(dt + timedelta(days=10))
