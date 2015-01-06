#########################################################################
# File Name: substr.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: 2015年01月06日 星期二 08时08分54秒
#########################################################################
#!/bin/bash
url='http://www.baidu.com/index.php'
echo ${url#*//}
echo ${url##*/}
echo ${url%/*}
echo ${url%%/*}
echo ${url:7}
echo ${url:0-9:5}
