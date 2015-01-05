<?php
 /* File Name: preg_replace_callback.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年01月03日 星期六 23时33分29秒
 */

$str = '1111111133222';
echo "{$str}\n";
$pattern = '/(.)(\1\1\1)/is';
preg_match($pattern,$str,$match);
var_dump($match);
$str = preg_replace_callback($pattern,function($match){
	var_dump($match);
	return $match[1].strlen($match[0]);
},$str);
//var_dump($str);
