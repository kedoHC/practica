<?php
$file = isset( $_GET['file'] ) ? $_GET['file'] : '';
?>
<!doctype html>
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
<h2>Remote Inclusion</h2>
<hr>
</div>
<div class="row column">
<div class="callout alert">
<h3>Contenido</h3>
</div>

</div>
<hr>


</div>
<table width="100%">
  <thead>
    <tr>
      <th>Contenido</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
      	<?php
			include($file);
		 ?>
      </td>
    </tr>
  </tbody>
</table>
<div class="large-3 large-offset-2 columns">

</div>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>