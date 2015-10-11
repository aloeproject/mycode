#!/usr/bin/env python

'typechk.py'

def displayNumType(num):
    print num,"is"
    if isinstance (num,(int ,float ,complex ,long)):
        print "a number of type:",type(num)
    else:
        print "not a number at all!";


displayNumType(1);
displayNumType(99999999999999999L);
displayNumType(9.4346);
displayNumType(5.3+19j);
displayNumType('acb');
