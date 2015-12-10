<?php
/**
 * File Name:sql_autoload_register.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

class MyLoader{
	//需要是静态方法
	public static function doAutoload($class){
		var_dump($class);
	}
}
spl_autoload_register(array('MyLoader','doAutoload'));

new \MYNAMESPACE\A();
