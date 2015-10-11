<?php
/**
 * File Name:pipeline_set.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$redis = new Redis();
$con = $redis->connect('127.0.0.1');
$pip = $redis->multi(Redis::PIPELINE);
#$pip = $redis->multi();

$key = 'many_set';

$start = microtime(true);
for ($i=0;$i<100000;$i++){
	$pip->set($key,$i);
	$pip->get($key);
}
$ret = $pip->exec();
#var_dump(array_slice($ret,0,10));
$end = microtime(true);
echo ($end - $start)."\n";
