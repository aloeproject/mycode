#########################################################################
# File Name: caishu.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: 2015年01月25日 星期日 22时07分12秒
#########################################################################
#!/bin/bash

num=0;
get_input(){
	read -p "请输入这个数" num
	while [ "$num" -lt 1 ] || [ "$num" -gt 100 ]
	do
		read -p "请输入一个1-100的数" num
	done
	echo $num;
}

echo "我心里一个数在1-100范围内,猜猜她是多少";
real_num=$(($RANDOM%100+1))
count=0;
while [ "$num" -ne "$real_num" ]
do
	count=$(($count+1))
	if [ "$count" -gt 6 ];then
		echo "答案是$real_num";
		echo "游戏结束"
		break;
	fi
	num=$(get_input);
	if [ "$num" -lt "$real_num" ];then
		echo "你猜小了"
	fi
	if [ "$num" -gt "$real_num" ];then
		echo "你猜大了"
	fi
	if [ "$num" -eq "$real_num" ];then
		echo "恭喜你猜对了"
	fi
done
