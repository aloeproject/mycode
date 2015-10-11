<?php
/**
 * File Name:fwrite.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$dir = dirname(__FILE__);
$file = dirname(__FILE__).'/fdata';
$count = 0;
$fp = fopen ($file,'w');
var_dump(flock($fp,LOCK_SH));
while (true) {
	sleep(1);
	$count++;
	fwrite($fp,$count);
}
fclose($fp);
