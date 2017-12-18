<?php

	//if form has been submitted process it

	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );

		
		extract($_POST);

			include("../include/config.php");

		if(!isset($error)){

			try {
				//insert into database
				$stmt = $db->prepare('UPDATE properties SET user_id = :user_id, prop_name = :prop_name, prop_type = :prop_type, size = :size, build_type = :build_type, bed_num = :bed_num, bath_num = :bath_num, list_type = :list_type, price = :price, street1 = :street1, street2 = :street2, city = :city, parish = :parish, country = :country WHERE pid = :pid');
				$stmt->execute(array(
					':pid' => $pid,
					':user_id' => $user_id,
					':prop_name' => $prop_name, 
					':prop_type' => $prop_type, 
					':size' => $size, 
					':build_type' => $build_type, 
					':bed_num' => $bed_num, 
					':bath_num' => $bath_num, 
					':list_type' => $list_type, 
					':price' => $price, 
					':street1' => $street1, 
					':street2' => $street2, 
					':city' => $city, 
					':parish' => $parish, 
					':country' => $country
				));

				//redirect to profile page
				header('Location: ../profile.php');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		}

	}

	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo '<p class="error">'.$error.'</p>';
		}
	}
	?>