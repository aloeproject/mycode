<?php
/**
 * File Name:checkip.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$ip = "10.255.255.0";
$pattern = "/^((\d|1[0-9]|1[0-9]{2}|25[0-5]{1}|2[0-4]\d)\.){3}(\d|1[0-9]|1[0-9]{2}|25[0-5]{1}|2[0-4]\d)$/";
var_dump(preg_match($pattern,$ip,$arr));
var_dump($arr);
