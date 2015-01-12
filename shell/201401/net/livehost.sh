#########################################################################
# File Name: livehost.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: 2015年01月12日 星期一 21时12分24秒
#########################################################################
#!/bin/bash

for ip in 192.168.2.{1..10}
do
	ping $ip -c 2 &> /dev/null
	if [ $? -eq 0 ];then
		echo "$ip is alive"
	fi
done
