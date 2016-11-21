<?php 
	
	$var = saludo('charles', 'chaplin');
	echo saludo('groucho', 'Marx');
	echo $var;

	function saludo ($nombre, $apellido){
		$resultado = "Bienvenido $nombre $apellido";
		return $resultado;
	}

 ?>