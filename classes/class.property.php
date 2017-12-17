<?php



class Property{

    private $db;
	
	function __construct($db){	
		$this->_db = $db;
	}

	public function get_property($pid){
		try {

			$stmt = $this->_db->prepare('SELECT * FROM properties WHERE pid = :pid');
			$stmt->execute(array(':pid' => $pid));
			
			$property = $stmt->fetch();
			return $property;

		} catch(PDOException $e) {
		    echo '<p class="error">'.$e->getMessage().'</p>';
		}
	}
	
	public function get_user_properties($user_id){	
	    try {

            $count = 0;
			$stmt = $this->_db->prepare('SELECT * FROM properties WHERE user_id = :user_id');
			$stmt->execute(array(
                ':user_id' => $user_id
            ));
			
			$property = array();
            while($row = $stmt->fetch()){
                $property[$count] = $row;
                $count++;
            }
			return $property;

		} catch(PDOException $e) {
		    echo '<p class="error">'.$e->getMessage().'</p>';
		}	
	}

	
	
}


?>