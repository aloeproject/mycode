#!/usr/bin/env python
# -*- coding:utf-8 -*-
'write.py'

#with 关键字帮助我们调研了close
#如果没有调研 close 方法不能保证，写入是完整的
with open('write1','w') as f:
    f.write('hello world')
