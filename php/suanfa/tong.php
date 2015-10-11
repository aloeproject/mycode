<?php
/**
 * File Name:tong.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$arr = array(5,1,2,12,45,9,2);

foreach ($arr as $item) {
	if (!isset($tmp[$item])) {
		$tmp[$item] = 0;
	} else {
		$tmp[$item]++;
	}
}

var_dump($tmp);
