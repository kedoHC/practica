<?php
session_start();
?><!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>PHP Security</title>
<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>
 
<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li class="menu-text">Curso Seguridad PHP</li>
</ul>
</div>
</div>
 
<div class="row column text-center">
<h2>Sessions</h2>
<hr>
</div>
<div class="row column">
<div class="callout primary">
<h3>Datos del usuario</h3>
<label><?php echo isset($_SESSION['user']['name'])? $_SESSION['user']['name'] :''; ?></label>
</div>
</div>
<hr>
<div class="row column">
<?php if( isset($_SESSION['user']['auth'])){ ?>
<div class="callout alert">
<h3>Usuario autenticado</h3>
<label>Bienvenido</label>
</div>
<?php } ?>
</div>

<div class="row column">
<div class="">
<a href="./session_set.php?name=Bernardo">Invitado</a>
</div>
</div>


</div>
<div class="large-3 large-offset-2 columns">
</div>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
</body>
</html>
