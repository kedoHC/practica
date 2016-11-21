<?php 
//que tipo de datos le vamos a pasar a una funcion o un metodo
//para cadenas desde la version 5

class Pet{
	public $name = 'Firulais';
}
class Person{
	public $age;
	public $name;
	private $money_in_wallet;
	private $todos;
	private $married;

	public function run(){
		echo 'estoy corriendo';
	}
	public function walk(){
		echo 'estoy caminando';
	}
	//typeHint se obliga a que la funcion reciba solamente un dato de tipo persona.
	public function greet( Person $other_person){
		echo 'hola, '. $other_person->name;
	}
	public function __construct($name){
		$this->name = $name;

	}
	public function adopt(Pet $instance_pet){
		echo ' hey, adopte a ' . $instance_pet->name;
	}
}
$person1 = new Person('Jesus');
$person2 = new Person('Alberto');
$pet = new Pet();

$person1->greet($person2);
$person1->adopt($pet);




?>