<?php
/**
 * File Name:iSAndroid.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
//判断手机是 android还是iphone

function getDeviceType(){
	$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
	if ($agent == 'iphone') {
	
	} elseif ($agent == 'ipad') {
	
	} elseif ($agent == 'android') {
	
	}
	return $agent;
}
