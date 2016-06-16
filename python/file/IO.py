#!/usr/bin/env python
# -*- coding:utf-8 -*-
'IO.py'
#StringIO在内存中读写str
from io import StringIO

f = StringIO()
f.write('hello')
f.write('world')
print(f.getvalue())

#ByteslO
#from   import 这种写法?
#BytesIO 重要用来对二进制方式在内存中读写
from io import BytesIO
f = BytesIO()
f.write('中文'.encode('utf-8'))
print(f.getvalue())
