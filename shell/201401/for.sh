#########################################################################
# File Name: for.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: 2015年01月12日 星期一 21时20分32秒
#########################################################################
#!/bin/bash
sum=0;
for ((i=1;i<=10;i++))
do
	sum=$(($i+$sum));
done
echo $sum;

sum=0;
for num in {1..10}
do
	sum=$(($num + $sum))
done
echo $sum;

sum=0;
i=1;
while [ $i -le 10 ]
do
	sum=$(($i+$sum))
	i=$(($i+1))
done
echo $sum;
