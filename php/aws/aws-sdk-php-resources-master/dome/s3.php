<?php
/**
 * File Name:s3.php
 * @author              $Author:lukang$
 * @email               $lk88boy@gmail.com$
*/

require dirname(__FILE__).'/../vendor/autoload.php';
use Aws\S3\S3Client;
$bucket = 'mytest-php';
$config = [
	'key'=>'AKIAICFW7ORFKIMQ7X2Q',
	'secret'=>'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',
	'region'=>'ap-northeast-1',
	 'version' => '2006-03-01',
];
$client = S3Client::factory($config);
$file = $client->getObjectUrl($bucket,'data.txt');
var_dump($file);exit;
