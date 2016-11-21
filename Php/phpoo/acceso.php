<?php 	
class MyProfile{
	private $email = 'jesus@correo.com';
	public $name;
	public $last_name;

	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		//reglas para validar email
		$this->email = $email;
	}
	private function getDetails(){
		//obtener datos de una base de datos
	}
}
$instMyProfile = new MyProfile;
echo $instMyProfile->getEmail();
?>