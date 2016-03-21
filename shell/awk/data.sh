#########################################################################
# File Name: data.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: Sat 12 Dec 2015 10:49:52 PM CST
#########################################################################
#!/bin/bash
k=0
page=100
for i in {1..200}
do
	arr1[$i]=$(($RANDOM % 1000)) 
	if [ $(($i % $page)) -eq 0 ];then
		start=$(($k*$page+1))
		end=$(($start+$page))
		for item in ${arr1[@]:$start:$end} 
		do
			echo $item >> $k
		done
		k=$(($k+1))
	fi
done

