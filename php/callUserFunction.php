<?php
/**
 * File Name:callUserFunction.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
class B{
	function setName($name,$val){
		echo "{$name},{$val}";
	}
}
class A
{
	public function __call($name,$args){
		return call_user_func_array(array('B',$name),$args);
	}
}

$a = new A();
$a->setName('123','abc');
