<?php

function fun1(){
	try{
		echo "try\n";
		throw new Exception('error');
		return 0;
	}catch(Exception $e){
		echo "catch\n";
		return 1;
	} finally {
		echo "finally\n";
		return 2;
	}
}

echo fun1();
