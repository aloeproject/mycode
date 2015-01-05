#########################################################################
# File Name: variable.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: 2014年12月21日 星期日 21时40分40秒
#########################################################################
#!/bin/bash
path=$PATH
echo ${path}
echo ${path#*local}
echo ${path##*local}
echo ${path%local*}
echo ${path%%local*}
echo ${path/local/lukang}
echo ${path//local/lukang}
