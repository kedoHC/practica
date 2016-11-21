<?php 
session_start();
$_SESSION['token'] = md5( uniqid( mt_rand(), true ) );
$msg = "";
if($_POST)
{

    
    
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
<style>
  .file-upload {
  position: relative;
  overflow: hidden;
  margin: 10px; }

.file-upload input.file-input {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  padding: 0;
  font-size: 20px;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0); }
</style>
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
<h2>Forms</h2>
<?php
  echo $msg;
?>
<hr>
</div>
<div class="row column">
<div class="callout primary">
<h3 id="h3Title">Contenido</h3>
<form method="post" enctype="multipart/form-data">
  <input type="text" name="name" value="" maxlength="10" />
  <input class="button" type="submit" value="Enviar" />
</form>

</div>
</div>
<hr>


</div>
<div class="large-12 large-offset-12 columns">
  <div class="row column">
    <div class="">
      
    </div>
  </div>
</div>
</div>

<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
</body>
</html>
