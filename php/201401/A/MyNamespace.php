<?php
 /* File Name: MyNamespace.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年01月24日 星期六 22时02分50秒
*/
namespace A;
require '../B/MyNamespace.php';
//use B\MyNamespace as b1;
class MyNamespace
{
	public static function fun(){
		\B\MyNamespace::fun();
		echo __METHOD__."\n";
	}
}

MyNamespace::fun();
