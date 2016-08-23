#!/usr/bin/env python
# -*- coding:utf-8 -*-
'ex_mysql.py'

import MySQLdb

conn = MySQLdb.connect('localhost','root','aliyun123','test')


cur = conn.cursor()
try:
    cur.execute('select * from appindex_mobile_payment');
    results = cur.fetchall()
    for row in results:
        print(row)

except:
    print('Error')


cur.close()
conn.close()
