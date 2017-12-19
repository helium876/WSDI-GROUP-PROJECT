<?php
    #Author: Agyei Masters
	//if form has been submitted process it

	if(isset($_POST['submit'])){
		$_POST = array_map( 'stripslashes', $_POST );


		//collect form data
		extract($_POST);
		extract($_FILES);

			include("../include/config.php");

			try {

				//get file extension
				include("getproperties.php");
				$ext = pathinfo($preview["name"],PATHINFO_EXTENSION);
				$previewImg = "preview_".((int)$PROPS[count($PROPS) - 1]["pid"] + 2).".".$ext;

				//save file to server
				
				if (move_uploaded_file($preview["tmp_name"], "../images/previews/".$previewImg)) {
					//insert into database
					$stmt = $db->prepare('INSERT INTO properties (user_id, prop_name, prop_type, size, build_type, bed_num, bath_num, list_type, price, preview, rented, street1, street2, city, parish, country, time_stamp) VALUES (:user_id, :prop_name, :prop_type, :size, :build_type, :bed_num, :bath_num, :list_type, :price, :preview, :rented, :street1, :street2, :city, :parish, :country,:time_stamp )') ;
					$stmt->execute(array(
						':user_id' => $user_id,
						':prop_name' => $prop_name, 
						':prop_type' => $prop_type, 
						':size' => $size, 
						':build_type' => $build_type, 
						':bed_num' => $bed_num, 
						':bath_num' => $bath_num, 
						':list_type' => $list_type, 
						':price' => $price, 
						':preview' =>  $previewImg,
						':rented' => 0, 
						':street1' => $street1, 
						':street2' => $street2, 
						':city' => $city, 
						':parish' => $parish, 
						':country' => $country,
						':time_stamp' => date('Y-m-d H:i:s')
					));
						
				}else{
					echo "file not saved";
					return false;
				}
				//redirect to profile page
				header('Location: ../profile.php?');
				exit;

			} catch(PDOException $e) {
			    echo $e->getMessage();
				return false;
			} 

	

	}

	//check for any errors
	if(isset($error)){
		foreach($error as $error){
			echo '<p class="error">'.$error.'</p>';
		}
	}
	?>