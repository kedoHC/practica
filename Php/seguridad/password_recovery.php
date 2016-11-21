<?php
session_start();
require_once('db_emulation.php');
$id = isset( $_GET['id'] ) ? $_GET['id'] : '';
if( !array_key_exists($id, $arr_users) )
{
	die('No encontrado');
}

$_SESSION['user'] = $arr_users[$id];
//echo '<pre>';
//var_dump($_SESSION);
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
</div>
<hr>
<div class="row column">
<?php if( isset($_SESSION['user'])){ ?>
<div class="callout alert">
<h3>Usuario autenticado</h3>
<label>Bienvenido, <?php echo $_SESSION['user']['name']; ?></label>
Su correo actua es: <b><?php echo $_SESSION['user']['email'] ?></b>
</div>
<form method="post" id="frmLogin">
  <div class="row">
    <div class="medium-6 columns">
      <label>Ingrese su nueva contraseña
        <input type="password" name="password" id="passwdPassword">
        <input class="button secondary" type="submit" value="MODIFICAR" id="btnUpdate" />
        
      </label>
      <p class="help-text">La contraseña debe tener ...</p>
    </div>
    <div class="medium-6 columns">
      <label>&nbsp;
      </label>
    </div>
  </div>
</form>
<?php } ?>
</div>

<div class="row column">
<div class="">
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
