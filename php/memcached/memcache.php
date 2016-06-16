<?php
/**
 * File Name:memcache.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

$mem = new Memcache();
$mem->connect('127.0.0.1',11211);

$arg = $argv;
$dan = md5($arg[1]);
echo $dan;exit;
$mem->set($dan,1,3600 * 2);

if ($mem->get($dan)) {
	echo 'ok';
} else {
    echo 'no';
}
exit;

echo $mem->get('key1')."\n";

$arr = [1,2,3,4];

$mem->set('arr1',$arr);
echo "\n";
print_r($mem->get('arr1'));

#$mem->delete('key1');
#var_dump($mem->get('key1'));
