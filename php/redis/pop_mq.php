<?php
/**
 * File Name:pop_mq.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
//队列出列
$redis = new Redis();
$con = $redis->connect('127.0.0.1');
$mqkey = "my_mq";
while (true) {
	$start = time();
	sleep(1);
	$ret = $redis->blpop($mqkey,2);
	var_dump($ret);
	var_dump(time() - $start);
}
