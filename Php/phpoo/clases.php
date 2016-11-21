<?php 

class persona{
	public $edad;
	public $nombre;

	public function correr(){
		echo ' estoy corriendo';
	}

	public function __construct($nombre, $edad){
		$this->nombre=$nombre;
		$this->edad=$edad;
	}
}

$persona1 = new Persona('jesus', 10);

echo $persona1->nombre;

$persona1->correr();

echo "\n";

$persona2 = new Persona('denise', 13);

echo $persona2->nombre;

$persona2->correr();
 ?>