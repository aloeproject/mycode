<?php
/**
 * File Name:Singleton.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

class Singleton
{

	private static $obj;

	public static instance(){
		if (self::$obj)	{
			return self::$obj;
		} else {
			return new Obj();
		}
	}
}
