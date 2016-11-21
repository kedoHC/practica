<?php

$dsn = 'mysql:dbname=php_security;host=127.0.0.1';
$user = 'root';
$password = '';

try{

	$pdo = new PDO(	$dsn, 
					$user, 
					$password
					);

}catch( PDOException $e ){
	echo 'Error al conectarnos: ' . $e->getMessage();
}



