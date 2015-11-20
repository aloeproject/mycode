<?php
/**
 * File Name:array_filter.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

function add($num){
	return ($num%2==1);
}

function even($num){
	return ($num % 2 == 0);
}
$arr1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
$arr2 = array(6, 7, 8, 9, 10, 11, 12);

print_r(array_filter($arr1,'add'));
print_r(array_filter($arr2,'even'));
