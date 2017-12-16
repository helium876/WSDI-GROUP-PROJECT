<?php

	//if form has been submitted process it

	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

		//very basic validation
		if($fname ==''){
			$error[] = '';
		}
		if($mname ==''){
			$error[] = '';
		}
		if($lname ==''){
			$error[] = '';
		}
		if($tel1 ==''){
			$error[] = '';
		}
		if($tel2 ==''){
			$error[] = '';
		}
		if($email ==''){
			$error[] = '';
		}
		if($trn ==''){
			$error[] = '';
		}
		if($password ==''){
			$error[] = '';
		}
		if($user_type ==''){
			$error[] = '';
		}

		if(!isset($error)){

			$hashedpassword = $user->password_hash($password, PASSWORD_BCRYPT);

			try {

				//insert into database
				$stmt = $db->prepare('INSERT INTO users (fname, mname, lname, tel1, tel2, email, trn, password, user_type) VALUES (:fname, :mname, :lname, :tel1, :tel2, :email, :trn, :password, :user_type)') ;
				$stmt->execute(array(
					':fname' => $fname,  
					':mname' => $mname,  
					':lname' => $lname,  
					':tel1' => $tel1,  
					':tel2' => $tel2,  
					':email' => $email,  
					':trn' => $trn,  
					':password' => $hashedpassword,  
					':user_type' => $user_type
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