<?php
/**
 * File Name:array_map.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$arr1 = array('1','2','3');
$arr2 = array('a','b','c');
$arr3 = array('z','x','c');

$ret = array_map(null,$arr1,$arr2,$arr3);
var_export($ret);
