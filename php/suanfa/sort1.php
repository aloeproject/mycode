<?php
/**
 * File Name:sort1.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
//奇数在前，偶数在后
$arr = array(1,6,5,2,4,9,1,12,3);
//使用二分法
function mysort(&$array){
	$len = count($array);

	$right = $len - 1;
	$left = 0;

	$i = $right;
	$j = $left;

	while($i > $j) {
		//偶数跳过
		while($array[$i] %2 ==0 && $i > $j){
			$i--;
		}

		while($array[$j] %2 ==1 && $i > $j){
			$j++;
		}

		$tmp = $array[$j];
		$array[$j] = $array[$i];
		$array[$i] = $tmp;
	}
}

mysort($arr);
var_dump($arr);
