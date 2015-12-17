<?php
/**
 * File Name:startWith.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
#$str = '|apples}';
#
#echo startsWith($str, '|'); //返回 true
#echo startsWith($str, '|ap'); //返回 true
#echo startsWith($str, 'ap'); //返回 false

function startWith($haystack,$needle){
	$haystack = strval($haystack);
	$needle = strval($needle);
	if ($needle == '') {
		return true;
	}
	if ($haystack[0]==$needle[0]){
		return true;
	}
	return false;
}

$status = startWith('|apples','|');
var_dump($status);
$status = startWith('|apples','ap');
var_dump($status);
