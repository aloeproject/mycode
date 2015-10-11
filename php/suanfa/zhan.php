<?php
/**
 * File Name:zhan.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$arr = array(6,3,1,7,5,8,9,2,4);

$ret = null;

while (true) {
	$ret[] = array_shift($arr);
	$t = array_shift($arr);
	array_push($arr,$t);
	if (count($arr) == 1){
		$ret[] = $t;
		break;
	}
}
var_dump(implode('',$ret));
