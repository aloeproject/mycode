<?php
/**
 * File Name:strzip.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

//aaaaffeee 修改为  a4f2e3
$str = 'aaaaffeee';
function strzip($str){
	$len = strlen($str);
	$res = '';
	$k = 0;
	$count = 1;
	for ($i = 0;$i<=$len;$i++){
		if (@$val == @$str[$i]) {
			$count++;
		} else {
			if ($i!=0){
				$res .= $val.$count;
				$count=1;
			}
		}
		$val = @$str[$i];
	}
	return $res;
}


print_r(strzip($str));
