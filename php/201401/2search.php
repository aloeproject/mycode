<?php
 /* File Name: 2search.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年01月08日 星期四 23时57分02秒
 */
$arr = array(1,1,4,5,6,8,10,19,20);

function search2($search,$arr,$min = null,$max = null){
	if (isset($min) || isset($max)){
		$key = floor(($min + $max) / 2);
	} else {
		$max = count($arr);
		$min = 0;
		$key = floor(count($arr) / 2);
	}

	if ($search == $arr[$key]) {
		return true;
	}

	if ($max - $min == 1) {
		return false;
	}

	if ($search > $arr[$key]) {
		$min = $key;
	} else {
		$max = $key;
	}
    return search2($search,$arr,$min,$max);
}
var_dump(search2(20,$arr));
