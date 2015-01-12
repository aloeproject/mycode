<?php
 /* File Name: anonymousFun.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年01月11日 星期日 16时49分26秒
*/
#但是 create_function 可以创建一个函数，但是第二个参数需要是一个字符串
$func = create_function('$val','echo $val;');
$func(1);
$a = $func;
$a(2);

$fun1 = function() {
	echo "hello world\n";
};

$fun1();

function fun2($fun){
	$fun();
}

fun2($fun1);

function callback($callback) {  
	$callback();  
}  
//输出: This is a anonymous function.<br />/n  
////这里是直接定义一个匿名函数进行传递, 在以往的版本中, 这是不可用的.  
////现在, 这种语法非常舒服, 和javascript语法基本一致, 之所以说基本呢, 需要继续向下看  
////结论: 一个舒服的语法必然会受欢迎的.  
callback(function() {  
    print "This is a anonymous function.\n";  
});  
//使用use 参数作为外面连接，署名函数的变量是没有和外面联系的
$msg = 'world';
$fun4 = function ($str) use ($msg){
	echo $str.$msg."\n";
};

$fun4('hello ');
