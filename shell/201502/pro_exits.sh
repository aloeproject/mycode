#########################################################################
# File Name: pro_exits.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: Tue 10 Feb 2015 10:24:39 PM CST
#########################################################################
#!/bin/bash
#检测这个进程是否存在
pro_name="real_while"
pro_exits=$(ps -aux|grep "$pro_name"|grep -v 'grep'|wc -l)
if [ "$pro_exits" -eq '0' ];then
	/usr/bin/php /mycode/php/real_while.php
fi
