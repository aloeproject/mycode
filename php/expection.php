<?php
 /* File Name: expection.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2014年12月30日 星期二 19时24分01秒
 */
try{
	if(!require("helloword")){
		throw new Exception();
	}
	echo "12";

}catch(Exception  $e){
	echo "error";
}

