<?php
 /* File Name: searchNumeric.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年01月11日 星期日 14时21分27秒
*/
#有如下字符串，怎么从中找到数字
$str = 'hello 123 world 789 abc!@';
$pattern = '/[\d]+/';
preg_match_all($pattern,$str,$match);
$num = implode('',$match[0]);
var_dump($num);

var_dump(preg_replace('/[^0-9]/','',$str));
