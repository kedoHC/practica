<?php 
session_start();

if( isset( $_GET['csrf'] ) && isset( $_SESSION['token'] ) && $_GET['csrf'] == $_SESSION['token'] )
{
	$_SESSION = [];
	header('Location: cross_site_login.php');	
}
