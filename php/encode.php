<?php
/**
 * File Name:encode.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

function encode($strParams){
	$authKey = 'AFE0B17F34DD4B8D82A181FCC4D24024';
	parse_str($strParams,$urlParams);
	$arr['accessid'] = $urlParams['accessid'];
	$arr['accesstype'] = $urlParams['accesstype'];
	$arr['principal'] = $urlParams['principal'];
	$arr['timestamp'] = $urlParams['timestamp'];
	
	ksort($arr);
	$code = http_build_query($arr);
	$code .= $authKey;
	return md5($code);
}

$paramsStr = 'accessid=acewill&accesstype=SSO&principal=zhangsan&timestamp=1461828636669';
echo encode($paramsStr);
