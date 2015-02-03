#########################################################################
# File Name: select_db.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: 2015年02月02日 星期一 23时12分00秒
#########################################################################
#!/bin/bash

user=root
passwd=123456

sql='select * from myhash limit 5';
result=$(mysql -uroot -p123456 -Dtest -Bse "$sql");

IFS='
';
for item in $result
do
	id=$(echo $item|awk '{print $1}');
	type=$(echo $item|awk '{print $2}');
	hash=$(echo $item|awk '{print $3}');
	printf "%-5s %-10s %-20s\n" $id $type $hash;
done
unset IFS;
