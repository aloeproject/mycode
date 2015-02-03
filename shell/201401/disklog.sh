#########################################################################
# File Name: disklog.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: 2015年01月28日 星期三 08时09分22秒
# 查看远程的计算机磁盘容量
#########################################################################
#!/bin/bash

IP_LIST="127.0.0.1"
USER=lkubuntu
#准备把它写入一个日志文件中
(
	for ip in $IP_LIST
	do
		#寻找以 /dev 开头的字符串
		ssh $USER@$ip 'df -H'|grep ^/dev/ > /tmp.$$.df
		
	done
) 
