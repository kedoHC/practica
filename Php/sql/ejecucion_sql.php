<?php 
require_once('conexion.php'); 
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width-device-width, initial-scale=1.0"/>
		<title>PHP & SQL</title>
		<link rel="stylesheet" type="text/css" href="css/foundation.min.css">
	</head>
	<body>
		<div class="top-bar">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="menu-text">Curso PHP & SQL</li>
				</ul>
			</div>
		</div>
		<div class="row column text-center">
			<h2>Ejecución de una sentencia SQL</h2>
			<hr>
		</div>
		<div class="row column">
			<div class="callout primary">
				<h3>Datos SQL</h3>
				<pre>
				<?php 
				$sql = 'SELECT * FROM ofertas'; 
				foreach( $pdo->query ( $sql ) as $rs )
				{
				
					var_dump($rs);
				
				}
				?>
				</pre>
			</div>
 		</div>
 		<hr>
		<div class="callout large secondary">
		<div class="row">
		</div>
		<div class="large-3 large-offset-2 columns">
			</div>
		</div>	
			
		<script src="js/jquery-3.0.0.min.js"></script>
		<script src="js/foundation.js"></script>
		<script>
			$(document).foundation(); 
		</script>
	</body>
</html>