<?php
/**
 * File Name:sort2.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
//两个顺序的数组，找出里面相同的元素
$arr1 = array(1,4,5,6,9,15,18,20,25);
$arr2 = array(2,3,5,6,8,9,10,15,20,25,29,45,67,70,71,81,82,89,92,95,102);

$len1 = count($arr1);
$len2 = count($arr2);
$j = 0;
for ($i=0;$i<$len2;$i++){
	
	while (isset($arr1[$j]) && 
	$arr1[$j] < $arr2[$i] && $len1 > $j)
	{
		$j++;
	}

	if (!isset($arr1[$j])) {
		break;
	}

	if ($arr1[$j] == $arr2[$i]){
		echo "{$arr1[$j]}\n";
	}
}
