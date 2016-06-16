<?php
/**
 * File Name:update.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

require dirname(__FILE__).'/../vendor/autoload.php';

use Aws\Resource\Aws;
$config = [
	'key'=>'AKIAICFW7ORFKIMQ7X2Q',
	'secret'=>'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',
	'region'=>'ap-northeast-1',
	 'version' => '2006-03-01',
	//'version'=>'2006-03-01',
];
$aws = new Aws($config);

$s3 = $aws->s3;
$s3 = $aws->s3(['region' => 'ap-northeast-1']);
$bucket = $s3->bucket('mytest-php');
$object = $bucket->object('data.txt');
print_r($object->getData());
