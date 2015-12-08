<?php
/**
 * File Name:hashTime.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
define('testtime', 50000);
$algos = hash_algos();
foreach($algos as $algo) {
	$st = microtime();
	for($i = 0; $i < testtime; $i++) {
		hash($algo, microtime().$i);
	}
	$et = microtime();
	list($ss, $si) = explode(' ', $st);
	list($es, $ei) = explode(' ', $et);
	$time[$algo] = $ei + $es - $si - $ss;
}
asort($time, SORT_NUMERIC);
echo "";
print_r($time);
