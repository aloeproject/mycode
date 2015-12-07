<?php
/**
 * File Name:time33.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
function time33($str){
	$hash = 0;
	$len = strlen($str);
	for ($i=0;$i<$len;$i++){
		$hash = ($hash << 5) + $hash + intval($str[$i]);
		#$hash = $hash <+ intval($str[$i]);
	}
	return strval($hash);
}
var_dump(time33('100000000'));
