<!-- en php.ini modificar la variable: upload_max_filesize = 20M a 3M. Para subir imagenes es
buen tamaño (DEPENDE DEL TIPO DE IMAGENES QUE VAMOS A SUBIR) -->

<!-- MIME acronimo de extensiones multiproposito de correo de internet (multipurpose internet mail extensions) standar que especifica como se deben de transferir los archivos que no esten codificados en ASCII  -->
<?php 
session_start();
/*md5() calcula el hash md5 de un STRING, con el Algoritmo MD5 Message-Digest de RSA Data Security, Inc.
hash de una cadena = https://es.wikipedia.org/wiki/Tabla_hash*/
$_SESSION['token'] = md5( uniqid( mt_rand(), true ) );
$msg = "";
if($_FILES)/*Se pregunta si la variable $_files se ha creado.*/
{
    /*Directorio en donde va a cargar las imagenes*/
    $target_dir = "images/";
    /*basename() dada una cadena que contiene una ruta o directorio, esta funcion devolvera el ultimo componente del nombre. http://php.net/manual/es/function.basename.php*/

    /*los parametros que puede recibir la variable $_FILES: http://php.net/manual/es/features.file-upload.post-method.php
    "file_to_upload de este ejemplo viene del name en el input tipo file"*/

    /*$target_file guarda un arreglo con el nombre de completo de la ruta y el nombre del archivo: 
    ejemplo: images/nombre_archivo.png */
    $target_file = $target_dir . basename($_FILES["file_to_upload"]["name"]);
    

    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $fileContents = file_get_contents($_FILES["file_to_upload"]["tmp_name"]);
    $mimeType = $finfo->buffer($fileContents);

    if( $mimeType == "image/png" )
    {
      if (move_uploaded_file($_FILES["file_to_upload"]["tmp_name"], $target_file)) {
          $msg = "Carga correcta";
      } else {
          $msg = "Error al intentar cargar archivo";
      }

    }else
    {
      $msg = "Error al intentar cargar archivo";
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
<h2>File upload</h2>
<?php
  echo $msg;
?>
<hr>
</div>
<div class="row column">
<div class="callout primary">
<h3 id="h3Title">Contenido</h3>
<form method="post" enctype="multipart/form-data">
  <button class="file-upload button alert" name="bla">            
    <input type="file" class="file-input" name="file_to_upload" />Seleccionar archivo
  </button>
  <input class="button" type="submit" value="Subir archivo" />
</form>

</div>
</div>
<hr>


</div>
<div class="large-12 large-offset-12 columns">
  <div class="row column">
    <div class="">
      <h3 id="h3Title">Listado imágenes</h3>
    </div>
  </div>
</div>
</div>

<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
</body>
</html>
