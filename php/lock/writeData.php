<?php
/**
 * File Name:writeData.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$file = dirname(__FILE__).'/fdata';

$fp = fopen($file,'r');
var_dump(flock($fp,LOCK_SH));
while (true){
	sleep(1);
	$count++;
	echo "$count\n";
	if ($count == 20){
		break;
	}
}
flock($fp,LOCK_UN);
fclose($fp);
