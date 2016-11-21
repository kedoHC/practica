<?php 
class Animal
{
	public $sound_type = 'hago un sonido';
	public function run(){
		echo ' yo corro ';
	}
	public function walk(){
		echo ' Yo camino ';
	}
	public function __construct(){
		echo " Ha nacido un animal";
	}
	public function getSound(){
		echo 'yo ' . $this->sound_type;
	}
}
class Dog extends Animal{
	public $sound_type = 'ladro';
	public function __construct(){
		parent::__construct();
		echo " ha nacido un perro.";
	}
}
class Cat extends Animal{
	public $sound_type = 'maullo';
	public function __construct(){
		parent::__construct();
		echo " ha nacido un gato.";
	}
}

$dog = new Dog();
$dog->run();
$dog->getSound();
echo "\n";
$dog = new Cat();
$dog->run();
$dog->getSound();
