<?php
/**
* @file resque.php
* @brief 
* @author firmy@foxmail.com
* @version 
* @date 2014-04-23
*/
date_default_timezone_set('GMT');
require 'bad_job.php';
require 'job.php';
require 'firmyjob.php';
require 'php_error_job.php';

require '../bin/resque.php';
