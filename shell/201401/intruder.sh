#########################################################################
# File Name: intruder.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: Mon 26 Jan 2015 08:46:35 PM CST
# 入侵检测
#########################################################################
#!/bin/bash

PATH=/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin
AUTHLOG=/var/log/auth.log
LOGFILE=/log/auth/auth_`date +'%Y-%m-%d'`.log
log_status=0;
#写入日志中
if [ -n "$1" ] && [ "$1" = 'yes' ];then
	log_status=1;
fi
#设置临时日志文件
LOG=/tmp/valid.$$.log
#排除无效的登入用户？？
grep -v "invalid" $AUTHLOG > $LOG
#从日志文件中得到倒数第5列的数据  这是登入失败尝试的用户名
users=$(grep "Failed password" $LOG | awk '{print $(NF-5)}'|sort|uniq)
tmp=$(printf "%-5s|%-10s|%-10s|%-23s|%-33s|%s\n" "st#" "User" "Attempts" "IP" "Address" "Host_mapping");
if [ "$log_status" -eq '1' ];then
	echo "$tmp" > $LOGFILE
else
	echo "$tmp";
fi

ucount=0;
#得到ip列表  o 参数值取得匹配的那个字符串  E参数使用正则表达式
ip_list=$(grep -Eo "[0-9]+\.[0-9]+\.[0-9]+\.[0-9]+" $LOG |sort|uniq)
for ip in $ip_list
do
	#找到的ip 去日志中循环查找
	grep $ip $LOG > /tmp/temp.$$.log
	for user in $users
	do
		#只放这个用户的的日志
		grep $user /tmp/temp.$$.log > /tmp/$$.log
		#截取16个字符放入 $$.time中
		cut -c -16 /tmp/$$.log > $$.time
		#得到起始时间
		tstart=$(head -1 $$.time);
		start=$(date -d "$tstart" "+%s");
		#得到结束时间
		tend=$(tail -1 $$.time);
		end=$(date -d "$tend" "+%s");
		limit=$(($end - $start));
		#寻找攻击大于120秒
		if [ $limit -gt 120 ];then
			#这样使用可以使ucount 自增
			ucount=$(($ucount+1));
			#得到其中一个ip数据
			IP=$(grep -Eo "[0-9]+\.[0-9]+\.[0-9]+\.[0-9]+" /tmp/$$.log|head -1)
			TIME_RANGE="$tstart-->$tend";
			ATTEMPTS=$(cat /tmp/$$.log|wc -l);
			HOST=$(host $IP|awk '{print $NF}')
			tmp=$(printf "%-5s|%-10s|%-10s|%-23s|%-33s|%s\n" "$ucount" "$user" "$ATTEMPTS" "$IP" "$HOST" "$TIME_RANGE");
			if [ "$log_status" -eq '1' ];then
				echo "$tmp" >> $LOGFILE
			else
				echo "$tmp";
			fi
		fi
	done
done
rm $$.time /tmp/valid.$$.log /tmp/temp.$$.log /tmp/$$.log
