<?php

$dsn = 'mysql:dbname=test2;host=192.168.24.51';
$user = 'bernardo';
$password = 'bernardo';

$pdo = new PDO(	$dsn, 
					$user, 
					$password
					);

echo "Conectado";