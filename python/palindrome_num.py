#!/usr/bin/env python
#coding:utf-8
'palindrome_num.py'

def isPalindrome(num):
    mlist = list(str(num))
    llen = len(mlist)
    if llen == 1:
        return False;
    for i in range(llen):
        if mlist[i] != mlist[llen - i - 1]:
            return False;
    return True;

print(list(filter(isPalindrome,range(1,10000))))
