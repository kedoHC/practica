<?php
require_once('connection.php');

$id = isset( $_GET['id'] ) ? $_GET['id'] : '';

$sql = 'DELETE FROM news WHERE id = ?';
//$statement = $pdo->query($sql);
$statement = $pdo->prepare($sql);
$statement->execute(array($id));

header('Location: sql_injection_list.php');


