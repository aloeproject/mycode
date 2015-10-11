<?php
/**
 * File Name:many_set.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$redis = new Redis();
$con = $redis->connect('127.0.0.1');

$key = 'many_set';

$start = microtime(true);
for ($i=0;$i<100000;$i++){
	$redis->set($key,$i);
	$redis->get($key);
}
$end = microtime(true);
echo ($end - $start)."\n";
