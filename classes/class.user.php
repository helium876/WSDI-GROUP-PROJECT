<?php

include('class.password.php');
include('class.property.php');

class User extends Password{

    private $db;
	public $properties;
	
	function __construct($db){
		parent::__construct();
	
		$this->_db = $db;
		$this->properties = array();
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}		
	}

	private function get_user_hash($email){	

		try {

			$stmt = $this->_db->prepare('SELECT password FROM users WHERE email = :email');
			$stmt->execute(array('email' => $email));
			
			$row = $stmt->fetch();
			return $row['password'];

		} catch(PDOException $e) {
		    echo '<p class="error">'.$e->getMessage().'</p>';
		}
	}

	public function get_user($email){
		try {

			$stmt = $this->_db->prepare('SELECT * FROM users WHERE email = :email');
			$stmt->execute(array('email' => $email));
			
			$user = $stmt->fetch();
			return $user;

		} catch(PDOException $e) {
		    echo '<p class="error">'.$e->getMessage().'</p>';
		}
	}

	public function set_properties($email){
		$prop = new Property($this->_db);
		$this->properties = $prop->get_user_properties($this->get_user($email)["id"]);
	}

	public function get_properties(){
		return $this->properties;
	}

	public function get_property($index){
		return $this->properties[$index];
	}

	public function property_count(){
		return count($this->properties);
	}
	
	public function login($email,$password){	

		$hashed = $this->get_user_hash($email);
		
		if($this->password_verify($password,$hashed) == 1){
		    
		    $_SESSION['loggedin'] = true;
			$_SESSION["email"] = $email;
		    return true;
		}		
	}
	
		
	public function logout(){
		session_destroy();
	}
	
}


?>