#########################################################################
# File Name: sleep.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: 2014年12月28日 星期日 14时51分00秒
#########################################################################
#!/bin/bash
cnt=0;
while [ '1' == '1' ]
do
	sleep 1
	cnt=$(($cnt + 1));
	phpcode='
		file_put_contents('/home/lkubuntu',1);
	';
	echo $cnt;
done
