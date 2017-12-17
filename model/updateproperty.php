<?php

	//if form has been submitted process it

	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

		//very basic validation
		if($prop_name ==''){
			$error[] = '';
		}
		if($prop_type ==''){
			$error[] = '';
		}
		if($size ==''){
			$error[] = '';
		}
		if($build_type ==''){
			$error[] = '';
		}
		if($bed_num ==''){
			$error[] = '';
		}
		if($bath_num ==''){
			$error[] = '';
		}
		if($list_type ==''){
			$error[] = '';
		}
		if($price ==''){
			$error[] = '';
		}
		if($preview ==''){
			$error[] = '';
		}
		if($rented ==''){
			$error[] = '';
		}
		if($street1 ==''){
			$error[] = '';
		}
		if($street2 ==''){
			$error[] = '';
		}
		if($city ==''){
			$error[] = '';
		}
		if($parish ==''){
			$error[] = '';
		}
		if($country ==''){
			$error[] = '';
		}

		if(!isset($error)){

			try {

				//insert into database
				$stmt = $db->prepare('UPDATE properties SET prop_name = :prop_name, prop_type = :prop_type, size = :size, build_type = :build_type, bed_num = :bed_num, bath_num = :bath_num, list_type = :list_type, price = :price, preview = :preview, rented = :rented, street1 = :street1, street2 = :street2, city = :city, parish = :parish, country = :country WHERE pid = :pid') ;

				$stmt->execute(array(
					':prop_name' => $prop_name, 
					':prop_type' => $prop_type, 
					':size' => $size, 
					':build_type' => $build_type, 
					':bed_num' => $bed_num, 
					':bath_num' => $bath_num, 
					':list_type' => $list_type, 
					':price' => $price, 
					':preview' => $preview, 
					':rented' => $rented, 
					':street1' => $street1, 
					':street2' => $street2, 
					':city' => $city, 
					':parish' => $parish, 
					':country' => $country,
					':time_stamp' => date('Y-m-d H:i:s')
				));

				//redirect to index page
				header('Location: index.php?action=added');
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