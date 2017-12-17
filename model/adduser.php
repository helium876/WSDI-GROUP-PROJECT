<?php

	//if form has been submitted process it

	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

		

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
	?>