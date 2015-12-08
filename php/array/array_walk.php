<?php
/**
 * File Name:array_walk.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$arr = array('a'=>1,'b'=>2,'c'=>3,'d'=>4);

function myfun($item,$key){
	echo "{$key}=>{$item}\n";
}
array_walk($arr,'myfun');

$myArray = array(1, 2, 3, 4, 5);
array_walk($myArray, function(&$value){
	    if ($value > 0) $value *= 2;
});
var_export($myArray);
