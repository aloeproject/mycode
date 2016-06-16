<?php
/**
 * File Name:passwordhash.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$password = 123456;

$option = [
	'cost'=>13,
];
$str = password_hash($password,PASSWORD_DEFAULT,$option);

var_dump($str);

$status = password_verify($password,$str);
var_dump($status);
