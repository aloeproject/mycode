#########################################################################
# File Name: top_command.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: Mon 26 Jan 2015 08:04:19 PM CST
# 查看 历史使用最多的命令
#########################################################################
#!/bin/bash

history_command=$(cat ~/.bash_history|awk -F '  ' '{list[$0]++}END{
	print "command\tcount";
	for (i in list) {
		printf("%s\t%d\n",i,list[i]);
	}
}'|sort  -nrk2|head)

echo "$history_command";
