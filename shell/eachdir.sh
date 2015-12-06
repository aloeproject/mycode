#########################################################################
# File Name: eachdir.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: Sun 06 Dec 2015 01:24:43 PM CST
#########################################################################
#!/bin/bash
dir=$(pwd)
showdir(){
	dir=$1
	dirList=$(ls $dir)
	for item in $dirList
	do
		file=$dir'/'$item
		if [ -d $file ];then
			echo -e "\e[0;36m$file\e[0m";
			showdir $file
		else
			echo -e "\e[0;32m$file\e[0m";
		fi
	done
}

showdir $dir
