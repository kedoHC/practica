<?php
 class BaseProfile
 {
 	protected $connection_data = "Conexion a la BD";
 	protected function connect2BD(){
 		echo $this->connection_data;
 	}
 	public function __construct(){
 		$this->connect2BD();
 	}
 } 
class MyProfile extends BaseProfile {
	public $name;
	public $last_name;

	public function __construct(){
		$this->connect2BD();
		
	}
	public function getEmail(){
		return $this->email;

	}
	public function setEmail($email)
	{
		//reglas para la asignacion de correo
		$this->email = $email;
	}
}

$InstBase = new BaseProfile;
$InstBase->connect2BD();
?>
	