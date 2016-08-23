#!/usr/bin/env python
# -*- coding:utf-8 -*-
'to_timestamp.py'

from datetime import datetime,timedelta,timezone

def toTimestamp(dt_str):
    tdate = datetime.strptime(dt_str,"%Y-%m-%d %H:%M:%S")
    tz = timezone(timedelta(hours = 2))
    td = tdate.replace(tzinfo=tz)
    print(td)

toTimestamp('2015-1-21 9:01:30')
