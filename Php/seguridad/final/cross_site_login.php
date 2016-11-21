<?php 
session_start();
$_SESSION['token'] = md5( uniqid( mt_rand(), true ) );
if($_POST)
{
  $password = isset( $_POST['password'] ) ? $_POST['password'] : '';
  if( $password == '12345678' )
  {
    $_SESSION['auth'] = true;
    header('Location: cross_site_login.php');
  }
  
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>PHP Security</title>
<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
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
<h2>Cross site forgery</h2>
<hr>
</div>
<div class="row column">
<div class="callout primary">
<h3 id="h3Title">Contenido</h3>
</div>
<?php
if( !isset( $_SESSION['auth'] ) )
{
?>
<form method="post" id="frmLogin">
  <div class="row">
    <div class="medium-12 columns">
      <label>Ingrese su contraseña
        <input type="password" name="password" />
        <input class="button secondary" type="submit" value="MODIFICAR" id="btnUpdate" />
      </label>
      <p class="help-text">La contraseña debe ...</p>
    </div>
    <div class="medium-6 columns">
      <label>&nbsp;
      </label>
    </div>
  </div>
</form>
<?php }else{ ?>
<a href="cross_site_logout.php?csrf=<?php echo $_SESSION['token']; ?>">Salir</a>
<?php } ?>
</div>
<hr>


</div>
<div class="large-3 large-offset-2 columns">
  <?php echo isset( $_SESSION['content'] ) ? $_SESSION['content'] : ''; ?>
</div>
</div>

<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
</body>
</html>
