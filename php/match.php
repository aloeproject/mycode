<?php
/**
 * File Name:match.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/
$str="http://www.baidu.com/index.php";

preg_match('/http:\/\/(.*)\//',$str,$ret);
var_dump($ret);
