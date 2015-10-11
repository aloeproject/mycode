<?php
/**
 * File Name:DateTime.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$date = new DateTime('2015-01-01 0:0:0');
//P Y年 M月 D日 T隔开作用  H小时 M 分钟 S秒
$date->add(new DateInterval('P1Y1M1DT1H1M1S'));
//
echo $date->format("Y-m-d H:i:s")."\n";

$interval = new DateInterval('P2Y4DT6H8M');
echo $interval->format("%y %d %h %i")."\n";

$date1 = new DateTime("2000-01-01");
$date2 = new DateTime("2001-02-01");
$interval = $date2->diff($date1);
//总共相差多少天
echo $interval->format("%a Total days")."\n";
echo $interval->format("%y %m")."\n";

