<?php
session_start();

$name = isset( $_GET['name'] ) ? $_GET['name'] : '';
if( gettype($name) == 'array' )
{
	die('Intento de inyecci&oacute;n');
}

$_SESSION['user'] = [ 'name' => $name ];
header('Location: sessions.php');