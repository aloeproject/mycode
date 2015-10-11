<?php
/**
 * File Name:fileList.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$dir = dirname(__FILE__);

function showDir($dir){
	$dh = opendir($dir);
	while ($file = readdir($dh)){
		if ($file =='.' || $file == '..'){
			continue;
		}
		if (is_file($file)){
			echo $dir.'/'.$file."\n";
		} elseif (is_dir($file)){
			//showDir($dir);
		}
		var_dump($file);

	}
	return null;
}

showDir($dir);
