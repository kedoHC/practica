<?php 
error_reporting(-1);

class DBstatic{
	protected static $db_user ='jesus';
	protected static $db_password='12345678';
	protected static $db_database_name='php_oo_db';

	protected static function connect(){
		echo "conectando con: ".self::$db_user . " : " . self::$db_password . " : " . self::$db_database_name;
	}
}
class BaseProfile extends DBstatic{
	protected function connect2DB(){
		echo $this->connection_data;
	}
	public function __construct(){
		self::connect();
	}
}
Class MyProfile extends BaseProfile{
	private $email = 'jesus@correo.com';
	public $name;
	public $last_name;

	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function message(){
		echo "mensaje";
	
	}
}
MyProfile::message();
?>