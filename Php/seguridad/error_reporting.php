<?php

$dsn = 'mysql:dbname=php_security;host=127.0.0.1';
$user = 'root';
$password = 'root2';

$pdo = new PDO(	$dsn, 
					$user, 
					$password
					);