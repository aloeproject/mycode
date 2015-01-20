<?php
 /* File Name: changeNum.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年01月16日 星期五 21时06分37秒
*/

//偶数右边 奇数左边
$arr = array(1,5,6,7,8,9,2,3,8);

for ($i = 0;$i<count($arr) - 1;$i++){
	for ($j = 0;$j<count($arr) - 1-$i;$j++) {
		if ($arr[$j] % 2 ==0) {
			$tmp = $arr[$j];
			$arr[$j] = $arr[$j+1];
			$arr[$j+1] = $tmp;
		}
	}
}


$arr = array(1,5,6,7,8,9,2,3,8);

$length = count($arr);

for ($i = 0;$i<$length;$i++) {
	if ($arr[$i] % 2 ==0) {
		$arr[] = $arr[$i];
		unset($arr[$i]);
	}
}

var_dump($arr);
