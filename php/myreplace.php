<?php
/**
 * File Name:myreplace.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

function myreplace($string,$find,$relace){
	$len = strlen($string);
	$j = 0;
	$k = 0;
	for ($i=0;$i<$len;$i++){
		if ($string[$i] == @$find[$j]){
			if ($j==0) {
				$k++;
			}
			$j++;
		} else {
			$j = 0;
		}
		@$arr[$k] .= $string[$i];
		if ($j==strlen($find)){
			$arr[$k] = $relace;
		}
	}
	

	return implode('',$arr);
}

$string = 'abcdef';
$find = 'abe';
$relace = '1999999';
$ret = myreplace($string,$find,$relace);
print_r($ret);
