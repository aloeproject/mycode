<?php
/**
 * File Name:array_reduct.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

function mysum($total,$item){
	$total += $item;
	return $total;
}

$arr = [1,2,3,4,5];
$ret = array_reduce($arr,'mysum','Not Data');
print_r($ret);
$ret = array_reduce([],'mysum','Not Data');
print_r($ret);
