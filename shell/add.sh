#########################################################################
# File Name: add.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: 2014年12月26日 星期五 17时28分15秒
#########################################################################
#!/bin/bash

read -p "input number" num

sum=0;
for (( i=1;i<=$num;i++))
do
	sum=$(($sum + $i))
done
echo $sum;
