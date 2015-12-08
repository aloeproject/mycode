<?php
/**
 * File Name:createArr.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
$arr = array('a','b','c','d');
for ($i = count($arr)-1;$i>=0;$i--){
	if (isset($t)) {
		$tmp[$arr[$i]] = $t; 
		unset($tmp[$arr[$i+1]]);
	} else {
		$tmp[$arr[$i]] = 1;
	}   
	$t = $tmp;
}
print_r($tmp);

function setElement(&$path,$data){
	return ($key = array_pop($path)) ? setElement($path,array($key=>$data)):$data;
}

print_r(setElement($arr,1));
