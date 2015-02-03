#########################################################################
# File Name: insert_db.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: 2015年02月02日 星期一 21时34分11秒
#########################################################################
#!/bin/bash

user=root;
passwd=123456;
sql="insert into myhash(type,hash) values (ceil(rand() * 100),md5(rand()));";
for i in {1..500000}
do
	mysql -u${user} -p${passwd} -Dtest -e"$sql";
done
time;
