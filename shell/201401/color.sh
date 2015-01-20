#########################################################################
# File Name: color.sh
# Author: lukang
# mail: lk88boy@gmail.com
# Created Time: 2015年01月17日 星期六 17时08分03秒
#########################################################################
export COLUMNS=80
export LINES=40
 
__win_C__=`tput cols`
__win_L__=`tput lines`
 
random_c(){
 if [ -n "$1" ];then
 #local  random_num=`sed 's/-//g' /proc/sys/kernel/random/uuid|sed 's/[a-Z]//g'|sed -r 's/^0+//g'|cut -c 1-5`
 random_num=$RANDOM
 r_num=$((random_num % $1))
 fi                 
 return 0;
}
 
random_cur_loc(){
 random_c $__win_C__
 cur_c=$r_num
 random_c $__win_L__
 cur_l=$r_num
}
 
random_color(){
 random_c 6
 color_num=$r_num
 color=$((color_num+31))
}
 
clear_win(){
 `tput clear`
}
 
init_win(){
 tput init
 tput setb 0
 tput setf 7
 tput cup 0 0
 tput civis
}
 
 
move(){
 tput cup $1 $2
}
 
return_l(){
 tput rev
}
 
print_l(){
 echo -e "\033[1;$2;40m $1 \033[0m"
 sleep 1
 tput clear
}
clear_40(){
 move 40 5
 echo "                          "
}
 
 
main(){
 clear_win;
 init_win;
 random_cur_loc;
 while : 
 do
  random_cur_loc;
  random_color;
  if [ $cur_l -gt 20 ];then
    if [ $cur_c -gt 40 ];then
     move $cur_l $cur_c&&print_l "hello friends" "$color"
    else
     move $cur_l $cur_c&&print_l "hello baby" "$color"
 
    fi
  else
    if [ $cur_c -gt 40 ];then
     move $cur_l $cur_c&&print_l "hello yanqi" "$color"
    else
     move $cur_l $cur_c&&print_l "hello gays" "$color"
    fi
  fi
  clear_40&&move 40 5&&echo $cur_l $cur_c $color
 done
}
 
main;
exit 0
