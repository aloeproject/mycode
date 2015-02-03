#########################################################################
# File Name: create_csv.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: 2015年02月02日 星期一 23时28分41秒
#########################################################################
#!/bin/bash

user=root
passwd=123456
db=onethink
sql='select * from onethink_action_log limit 10';
result=$(mysql -u$user -p$passwd -D$db -e "$sql");

IFS='
';
for item in $result
do
	col=$(echo $item|awk '{print NF}')
	count=1;
	res=''
	while [ $col -ge $count ]
	do
		tmp=$(echo $item|awk '{print $'$count'}')
		if [ $col -ge $count ] && [ $count -ne 1 ];then
			res=$res","$tmp
		else
			res=$tmp
		fi
		let count++;
	done
	echo "$res"
done
unset IFS;
