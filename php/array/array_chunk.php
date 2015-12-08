<?php
/**
 * File Name:array_chunk.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
$arr =  array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($arr,2));

$k = 0;
$count = 0;
foreach ($arr as $item) {
	if ($count == 2) {
		$k++;
		$count = 0;
	}
	$tmp[$k][]  = $item;
	$count++;
}
print_r($tmp);
