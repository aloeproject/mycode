<?php
 /* File Name: sort.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年01月20日 星期二 20时29分33秒
*/
//几种简单排序
//冒泡排序

$arr = array(1,4,2,6,9,0,10,5);

for ($i = 0;$i<count($arr);$i++) {
	for ($j = 0;$j<count($arr) - $i - 1;$j++) {
		if ($arr[$j] > $arr[$j+1]) {
			$tmp = $arr[$j];
			$arr[$j] = $arr[$j+1];
			$arr[$j+1] = $tmp;
		}
	}
}

var_export($arr);
//直接插入排序
//把一个数插入进一个排序好的数列中(一般是认为第一个数已经进行了排序)

$val = 8;
$arr = array (
   0,1,2,4,8,5,6,9,10,
);

foreach ($arr as $k=>$v) {
	$i = $k - 1;
	while ($i - 1 > -1 && $v < $arr[$i]) {
		$next = $arr[$i+1];
		$arr[$i+1] = $arr[$i];
		$arr[$i] = $next;
		$i--;
	}
}

var_export($arr);

//快速排序 
//1.从数列中挑出一个元素作为基准
//2.重新排序数列，把所有元素比基准小的排序到左边，比基准大的数排序到右边
//3.递归的把小于基准值元素的子数列和大于基准值的子数列排序

$arr = array(5,10,6,0,43,66,23);
function qsort($arr){
	$length = count($arr);
	if ($length <= 1){
		return $arr;
	}
	$left = null;
	$right = null;
	$mid = floor($length / 2);
	$midVal = $arr[$mid];

	foreach ($arr as $val) {
		if ($val == $midVal){
			continue;
		}

		if ($val < $midVal) {
			$left[] = $val;
		} else {
			$right[] = $val;
		}
	}
	
	return array_merge((array)qsort($left),(array)$midVal,(array)qsort($right));
}

var_export(qsort($arr));



