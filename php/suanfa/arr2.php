<?php
/**
 * File Name:arr2.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$arr = array(1,3,4,5,6);
$val = 'haha';

$arr = array_reverse($arr);
foreach ($arr as $item) {
	if (!isset($res))
		$res = $val;
	$res[$item] = $res;
	print_r($res);exit;
}
