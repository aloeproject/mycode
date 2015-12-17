<?php
/**
 * File Name:requireError.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
error_reporting(0);
register_shutdown_function(function(){
	print_r(error_get_last());
});
try{
	require '1.php';
}catch(Exception $e){
	var_dump($e);
}
