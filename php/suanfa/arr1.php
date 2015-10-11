<?php
/**
 * File Name:arr1.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$input = array(
	array('id'=>4,'score'=>3),
	array('id'=>4,'score'=>7),
	array('id'=>4,'score'=>9),
	array('id'=>2,'score'=>1),
	array('id'=>1,'score'=>2),
	array('id'=>6,'score'=>8),
);

function mysort(&$arr){
	$pos = 3;
	$count = count($arr);
	for ($i = 0;$i<$pos;$i++){
		$userIds[] = $arr[$i]['id'];
		$b = $i+1;
		for ($j=$i+1;$j<$count;$j++){
			if (in_array($arr[$j]['id'],$userIds)){
				continue;
			} else {
				$tmp = $arr[$b];
				$arr[$b] = $arr[$j];
				$arr[$j] = $tmp;
				break;
			}
		}
	}
}
mysort($input);
print_r($input);
