<?php
/**
 * File Name:test.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

function table($cur,$num){
	if ($cur <= 1){
		return '';
	}
	table($cur-1,$num);
	echo "\t";
}

function dizeng($cur,$num){
	$tmp = ($num-$cur)+1;
	//队列结构,先进先出
	echo "{$cur}\t";
	if ($cur == $num){
		return '';
	}
	dizeng($cur+1,$num);
}

function dijian($cur,$num){
	if ($cur >= $num){
		return '';
	}
	//堆栈结构,先进后出
	dijian($cur+1,$num);
	echo $cur."\t";
}

function fun1($cur,$n) {
	table($cur,$n);
	dizeng($cur,$n);
	dijian($cur,$n);
	echo "\n";
	if ($cur ==1){
		return '';
	}
	fun1($cur-1,$n);
}

$num = 10;
fun1($num,$num);
//dijian(2,4);
//dizeng(1,4);

