<?php
session_start();

$_SESSION['user'] = $_GET['name'];
header('Location: sessions.php');