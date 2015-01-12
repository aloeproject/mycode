<?php
 /* File Name: showcount.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年01月11日 星期日 15时45分08秒
*/

#显示1 在里面显示了多少次
$str = 110011;
preg_match_all('/1/',$str,$match);
//得到次数
var_dump(count($match[0]));
