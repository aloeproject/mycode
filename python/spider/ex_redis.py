#!/usr/bin/env python
# -*- coding:utf-8 -*-
'ex_redis.py'

import redis

con = redis.Redis(host='localhost',port=6379,db=0)
con.set('key','111')

print(con.get('key').decode('utf-8'))
