<?php
	//要求给出1到9999之间随机数共 365个，第一个数是1，最后一个数是9999，随机数之间尽可能均匀分别。

$start = 1;
$end = $start;
$ceil = ceil(9999/365);
$ct = 0;
$sum = 0;
$num[] = 1;
do {
	//$ct += $ceil;
	$sum += $ceil;
	if ($sum >= 9999) {
		$rand[] = 9999;
		break;
	}
	
	if ($start ==1){
		$start = 2;
	} else {
		$start = $sum;
	}
	$end = $ceil + $start >= 9999?9999:($ceil + $start);
	if ($end == 9999)
		break;
	$rand[] = rand($start,$end);
}while (true);
var_dump($rand);
