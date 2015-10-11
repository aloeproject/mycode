<?php
/**
 * File Name:kuaishu.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
//通过一趟排序将要排序的数据分割成独立的两部分，其中一部分的所有数据都比另外一部分的所有数据都要小，然后再按此方法对这两部分数据分别进行快速排序，整个排序过程可以递归进行，以此达到整个数据变成有序序列
$array = array(5,2,4,1,9,2,0,7);

function mysort(&$array,$left,$right){
	if ($left > $right) {
		return '';
	}
	$point = $array[$left];
	$i = $left;
	$j = $right;

	while ($i!=$j){
		//先对右边排序
		while ($array[$j] >= $point && $j>$i){
			$j--;
		}

		while ($array[$i] <= $point && $j>$i){
			$i++;
		}

		if ($i < $j) {
			$tmp = $array[$i];
			$array[$i] = $array[$j];
			$array[$j] = $tmp;
		}
	}
	//基准数回归
	$array[$left] = $array[$i];
	$array[$i] = $point;

	//继续左边排序
	mysort($array,$left,$i-1);
	//继续右边排序
	mysort($array,$i+1,$right);
}

mysort($array,0,count($array)-1);
print_r($array);
