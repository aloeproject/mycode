<?php
/**
 * File Name:num1.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$num='3123533413257891';

$arr = str_split($num);
$max = 0;
do{
	$cur = current($arr);
	$next = next($arr);

	if (($cur +1) == $next){
		$tmp[$cur] = true;
		$tmp[$next] = true;
		$count = count($tmp);
		if ($max <= $count) {
			$max = $count;
			$ret = $tmp;
		}
	} else {
		$tmp = null;
	}
}
while($next);

var_dump($ret);
$arr = str_split($num);
$ret = null;
$max = 0;
do {
	$cur = $tmp[] = current($arr);

	$next = next($arr);
	if (($cur + 1) != $next) {
		$count = count($tmp);
		if ($max <= $count ){
			$ret = $tmp;
			$max = $count;
		}
		$tmp = null;
	}
	
}while($next);
var_dump($ret);
