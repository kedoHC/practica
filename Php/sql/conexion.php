<?php 

$dsn = 'mysql:dbname:bolsauehm;host:127.0.0.1';
$user = 'kedo1';
$password = 'kedokedo';

try{ $pdo = new PDO ($dsn, $user, $password);
	
}catch( PDOException $e ){
	echo 'Error al conectarnos: '.$e->getMessage(); 
}
?>