<?php
 /* File Name: search100.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年01月11日 星期日 13时42分46秒
 * #有99个数，他们分别是0-99中的一个，但是却是其中一个，如果迅速的找到缺少的数字
*/
//创建随机数
function createRand($num = 100) {
	$arr = array();
	for ($i = 0;$i<$num;$i++) {
		$arr[] = $i;
	}

	shuffle($arr);
	$k = rand(0,$num - 1);
	unset($arr[$k]);
	return $arr;
}

function searchNum($searchValue,$array) {
	if (isset($array[$searchValue])) {
		return true;
	} else {
		return false;
	}
}

$array = createRand(2);
var_dump($array);
var_dump(searchNum(1, $array));
