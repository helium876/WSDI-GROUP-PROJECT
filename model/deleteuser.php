<?php 
	if(isset($_REQUEST['deluser'])){ 

		//if user id is 1 ignore
		if($_REQUEST['deluser'] !='1'){
			include("../include/config.php");

			$stmt = $db->prepare('DELETE FROM users WHERE id = :id') ;
			$stmt->execute(array(':id' => $_REQUEST['deluser']));

			header('Location: ../profile.php');
			exit;

		}
	} 

 ?>