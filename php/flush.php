<?php
/**
 * File Name:flush.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

for ($i=0;$i<100;$i++){
	echo $i;
	//ob_flush();
	flush();
	sleep(1);
}
