<?php
	class Loteria{
		//Atributos
		public $numero;
		public $intentos;
		public $resultado = false;

		//metodos
		public function __constructor($numero, $intentos){
			$this->numero = $numero;
			$this->intentos = $intentos;
		}

		public function sortear(){
			$minimo = $this->numero/2;
			$maximo = $this->numero*2;
			
			for ($i = 0; $this->intentos; $i++){
				$int = rand($minimo,$maximo);
				self::intentos($int);
			}
		}
		public function intentos(){
			if($int == $this->numero){
				echo"<br>" . $int . " == " . $this->numero . "</b><br>";
				$this->resultado = true;
			}else{
				echo $int . " != " . $this->numero . "<br>";
			}

		}
		public function __destruct(){
			if($this->resultado){
				echo "Felicidades, has ganado en " . $this->intentos . " intentos." ;
			}else{
				echo "Que lastima, has perdido en " . $this->intentos . " intentos." ;

			}
		}

	}
	$loteria = new Loteria();
	$loteria->sortear();


?>