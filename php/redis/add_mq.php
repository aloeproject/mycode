<?php
/**
 * File Name:add_mq.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
//用来产生队列

$redis = new Redis();
$con = $redis->connect('127.0.0.1');
$mqkey = "my_mq";
while (true) {
	sleep(1);
	$redis->rpush($mqkey,time());
}
