<?php
/**
 * File Name:arrRand.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
function arrRand($n){
	for ($i = 1;$i<=$n;$i++) {
		$arr[] = $i;
		$tmp[] = mt_rand(1,$n);
	}

	foreach ($tmp as $item) {
		$len = count($arr);
		$k = $item%$len;
		$ret[] = $arr[$k];
		unset($arr[$k]);
		$arr = array_merge($arr);
	}
	
	return $ret;
}

print_r(arrRand(5));
