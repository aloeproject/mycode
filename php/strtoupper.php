<?php

function change($str){
	$arr = preg_split('/\s{1,}/',$str);
	foreach ($arr as &$item) {
		if (empty($item)) {
			continue;
		}
		$last = substr($item,(strlen($item) - 1));
		$asc2 = ord($last);
		if ($asc2 >= 65 && $asc2 <= 90) {
			$item[strlen($item)-1] =  strtolower($last);
		} elseif ($asc2 >= 97 && $asc2 <=122) {
			$item[strlen($item)-1] =  strtoupper($last);
		}
	}
	$str = implode (" ",$arr);
	return $str;
}

$str = 'A journey of a thousand miles must begin with a single step';
echo change($str);

