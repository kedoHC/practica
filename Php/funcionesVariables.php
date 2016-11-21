<?php 
	$funcion = 'saludo';

	echo $funcion ('goruncho');

	function saludo($nombre, $apellido = 'marx'){
		return "Bienvenidos $nombre $apellido  !!";
	}
	//Se guarda en la variable $funcion el nombre de la funcion variable, la cual puede tomar el valor
	//que nosotros apliquemos.
 ?>