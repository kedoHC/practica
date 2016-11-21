<?php 

class persona{

	public $edad;
	public $nombre;

	public function correr(){
		echo ' estoy corriendo';
	}

	public function caminar(){
		echo ' estoy caminando';
	}
	public function saludar($nombre_otra_persona){
		echo $this->nombre . ' saluda a ' . $nombre_otra_persona;
	}

	public function __construct(){
		echo "Estoy siendo creado ". rand(1,99) . "\n";
	}
}
$persona = new persona();
$persona->correr();
$persona->caminar();
$persona->saludar('Jesus');

?>