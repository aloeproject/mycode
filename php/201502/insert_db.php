<?php
 /* File Name: insert_db.php
 * Author: lukang
 * mail: lk88boy@gmail.com
 * Created Time: 2015年02月03日 星期二 08时22分02秒
*/
$con = mysqli_connect('127.0.0.1','root','123456','test') or die('connect error!');
$sql = 'insert into myhash(type,hash) values (ceil(rand() * 100),md5(rand()));';

function insertDB($pidNum,$con,$sql){
	$count=0;
	for ($i = 0;$i<500000;$i++) {
		$count++;
		$stime = time();
		$ret = mysqli_query($con,$sql);
		$etime = time();
		if ($stime != $etime) {
			echo "进程{$pidNum}每秒执行".$count."\n";#每秒执行数
			$count=0;
		}
	}
}
$pid = 2;#开启进程数
for ($pidNum=0;$pidNum<$pid;$pidNum++) {
	echo $pidNum;
	$pids[$pidNum] = pcntl_fork();
	if ($pids[$pidNum]==-1) {
		die ("进程{$pidNum}创建失败");
	}elseif ($pids[$pidNum]) {
		//echo 'farther'.$pidNum."\n";
		//父进程逻辑
		pcntl_wait($status);
	} else {
		//echo 'son'.$pidNum."\n";
		//insertDB($pidNum,$con,$sql);
	}
}

