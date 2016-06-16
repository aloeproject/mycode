#!/usr/bin/env python
# -*- coding:utf-8 -*-
'show_file.py'

import os
#列出此下面的全部py文件

fileList = [ x for x in os.listdir('.') if os.path.isfile(x) and os.path.splitext(x)[1]=='.py']
print(fileList)
