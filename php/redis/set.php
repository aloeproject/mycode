<?php
/**
 * File Name:set.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
$redis = new Redis();
$con = $redis->connect('127.0.0.1');
#$redis->set('haha','[5]',20);
var_dump($redis->get('haha'));
