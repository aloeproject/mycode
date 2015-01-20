#########################################################################
# File Name: pro.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: 2015年01月17日 星期六 16时41分28秒
#########################################################################
#!/bin/bash
#批处理 进程对某个进程进行 重启或杀死

PRO_NAME='while_true'

while true;
do
	num=$(ps aux|grep PRO_NAME|grep -v grep|wc -l)
	#为一个的情况
	if [ "$num" -eq "1" ];then
	#大于一个的情况
	elif [ "$num" -gt "1" ];then
	fi
done
