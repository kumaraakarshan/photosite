<?php

declare(strict_types=1);
ini_set('error_reporting', '-1');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('log_errors', '1');
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'].'logfiles/php_errors.txt');

require($_SERVER['DOCUMENT_ROOT'].'functions.php');

// --------------------------------------------

// uncomment if mysql is required
$link = mysqli_connect('p:localhost', 'root', 'passwd', 'photosite', NULL, '/var/run/mysqld/mysqld.sock');
mysqli_set_charset($link, 'utf8mb4');

function _MS($str){
	$str = preg_replace('/^\p{Z}+|\p{Z}+$/u', '', $str);
	return mysqli_real_escape_string($GLOBALS['link'], $str);
}

// --------------------------------------------
