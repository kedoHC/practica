<?php 
	
	$numero = 10;

	procesarporValor($numero);

	echo $numero;

	procesarporReferencia($numero);

	echo $numero;

	function procesarPorValor($numero){
		return $numero+=1;
	}
	function procesarPorReferencia(&$numero){
		return $numero+=1;
		//por REFERENCIA si se modifica el valor de la variable $numero
		//y por VALOR no.

	}

 ?>