<?php
/**
* @file queue.php
* @brief 
* @author firmy@foxmail.com
* @version 
* @date 2014-04-23
*/
if(empty($argv[1])) {
	die('Specify the name of a job to add. e.g, php queue.php PHP_Job');
}

require __DIR__ . '/init.php';
date_default_timezone_set('GMT');
Resque::setBackend('127.0.0.1:6379');
$num = $argv['3'];
$args = array(
	'time' => time(),
	'array' => array(
		'test' => 'test'.$num,
	),
);

$jobId = Resque::enqueue($argv[1], $argv[2], $args, true);
echo "Queued job ".$jobId."\n\n";
