<?php
/**
 * File Name:gzcompress.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$str = "gzcompress";
echo gzuncompress(gzcompress($str,9))."\n";

$arr = [1,2,3,4,5,6];
echo gzuncompress(gzcompress(json_encode($arr),9))."\n";

$redis = new Redis();
$con = $redis->connect('127.0.0.1');
$redis->set('arr',gzcompress(json_encode($arr),9));
$redis->set('arr1',json_encode($arr));
$arrStr = $redis->get('arr');
echo (gzuncompress($arrStr))."\n";
