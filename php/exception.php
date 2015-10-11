<?php
/**
 * File Name:exception.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

try{
	throw new Exception('hihi',1000);
}catch(Exception $e){
	echo $e->getMessage();
	echo $e->getCode();
}
