<?php

define('ROOT_PATH', '/var/www/html/');
$config = require_once 'config.php';

try {
	$db = new PDO("mysql:host={$config['host']};dbname={$config['database']};charset=utf8", $config['user'], $config['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $error) {
	echo $error->getMessage();
	exit('Database error');
}
