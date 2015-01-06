<?php
 /* File Name: strcompress.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年01月05日 星期一 23时23分31秒
 * desc 字符串的压缩和解压
 * 例如把 11122 压缩成字符串 1322 这种形式
 */

class Compress
{
	#这里需要用单引号 防止被转义
	function encode($str){
		$pattern = '/(.)(\1+)?/is'; //出现后面出现重复数据或者没有出现  没有达到压缩的效果如果全是一个单词 最坏的情况是压缩后的字符串增加一倍
		$str = preg_replace_callback($pattern,function($match){
			return $match[1].strlen($match[0]);
		},$str);
		return $str;
	}

	function decode($str){
		$pattern = '/(\w)(\d)/s';
		$str = preg_replace_callback($pattern,function($match){
			return str_repeat($match[1],$match[2]);#这个字符串重复几次
		},$str);
		return $str;
	}
}
$str = '12211';
$a = new Compress();
$encode = $a->encode($str);
//echo $encode;
echo $a->decode($encode);
