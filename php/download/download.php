<?php
/**
 * File Name:download.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$url = "http://downloads.activestate.com/Komodo/releases/10.0.1/Komodo-Edit-10.0.1-17276.msi";

$stream = fopen($url,'rb');
while(!feof($stream)){
	echo fread($stream,2048);
	flush_end_clean();
	sleep(1);
}
