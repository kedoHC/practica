<?php 
	$a = $b = 10;

	echo nombreFuncion();

	function NOmbreFuncion(){
		global $a, $b; //a y b se buscan fuera de la funcion
		return $a * $b;

	}
 ?>