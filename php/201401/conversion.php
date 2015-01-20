<?php
 /* File Name: conversion.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年01月19日 星期一 19时58分44秒
*/

//10进制转为其他进制

function change($num,$conversion) {
	$arr = array();
	if (!in_array($conversion,array(2,8,16)))
	{
		return false;
	}
	do {
		$arr [] = $num % $conversion;
		$num = floor($num / $conversion);
	} while ($num > 0);

	array_walk_recursive(array_reverse($arr),function($value){
	
	});
	//var_dump($arr);
	return $str;
}

echo change(11,16)."\n";
//echo change(11,8)."\n";
