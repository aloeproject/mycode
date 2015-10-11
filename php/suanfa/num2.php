<?php
/**
 * File Name:num2.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$arr1 = array(1,3,4,5,6,7,10,15);
$arr2 = array(5,10,15);

$len1 = count($arr1);
$len2 = count($arr2);

$i = 0;
$j = 0;

while ( $i < $len1 && $j < $len2){
	
	if ( $arr1[$i] < $arr2[$j]) {
		$i++;
	} elseif ($arr1[$i] == $arr2[$j]) {
		$i++;
		$j++;
	} elseif ($arr1[$i] > $arr2[$j]){
		break;
	}
}

if ( $j < $len2) {
	echo "no";
} else {
	echo "yes";
}
