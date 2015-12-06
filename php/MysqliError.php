<?php
/**
 * File Name:MysqlError.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
error_reporting(0);
$port        = 12808;
$user        = "cdb_outerroot";
$password    = "kb4gjgg7";
$host        = "563d79c90efd8.sh.cdb.myqcloud.com";
$dbname		 = "test";
try{
	$mysql = new mysqli($host,$user,$password,$dbname,$port);
	if($mysql->connect_errno){
		throw new Exception($mysql->connect_error,$mysql->connect_errno);
	}
}catch (Exception $e){
	echo "message:{$e->getMessage()}\n";
	echo "code:{$e->getCode()}\n";
}
$mysql->query('set names utf8');
