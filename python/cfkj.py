#!/usr/bin/env python
#coding:utf-8

import sys

def cfkj(num):
    for y in range(num):
        realy = y + 1
        for x in range(realy):
            realx = x + 1
            sys.stdout.write("%s * %s = %s\t" % (realx,realy,realx*realy))    
        sys.stdout.write("\n")

cfkj(9)
