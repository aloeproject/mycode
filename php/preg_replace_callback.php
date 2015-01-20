<?php
 /* File Name: preg_replace_callback.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年01月03日 星期六 23时33分29秒
 */

$str = 'aaaaaafffeee';
echo "{$str}\n";
$pattern = '/(\w)(\1+)/is';
//preg_match($pattern,$str,$match);
//var_dump($match);
$str = preg_replace_callback($pattern,function($match){
	return $match[1].strlen($match[0]);
},$str);
$str = 'abcd';

$length = strlen($str);
$count = 1;
$res = null;
for ($i=0;$i<=$length;$i++) {
	if (isset($val) && isset($str[$i]) 
		&& $val == $str[$i]) {
		$count++;
	} else {
		if ($i!=0) {
			$res .= $val.$count;
			$count=1;
		}
	}
	if (isset($str[$i]))
	$val = $str[$i];
}
var_dump($res);
