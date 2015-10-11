<?php
/**
 * File Name:fread.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$file = dirname(__FILE__).'/fdata';
$fp = fopen($file,'r');
if (true) {
	while(true){
		flock($fp,LOCK_SH);
		sleep(1);
		echo fread($fp,filesize($file));
	}
} else {
	echo 'error';
}
fclose($fp);
