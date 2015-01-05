<?php
 /* File Name: uniq.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年01月03日 星期六 22时10分12秒
 */

$str='1,1,1,2,1';
$arr = explode(',',$str);
$arr = array_flip(array_count_values($arr))[1];
var_dump($arr);
