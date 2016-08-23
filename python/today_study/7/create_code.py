#!/usr/bin/env python
# -*- coding:utf-8 -*-
'create_code.py'

import hashlib
import random

mycode = []
for i in range(0,20):
    num = str(random.random())
    code = hashlib.md5(num.encode('utf-8')).hexdigest()
    mycode.append(code)

for i in mycode:
    print(i)
