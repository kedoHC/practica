<?php 
	function vocalesEnCadena($cadena){
		$contador = 0;
		for($i=0;$i<count($cadena);$i++){ 
			if ($cadena[$i] = 's'){
				$contador++;
			}
		}  
	return $contador;
	}

	echo vocalesEnCadena('jesus alberto');
 ?>