<?php
    #Author: Agyei Masters
	if(isset($_REQUEST['deluser'])){ 

		//if user id is 1 ignore
		if($_REQUEST['deluser'] !='1'){
			include("../include/config.php");
			if($_SESSION["id"] == $_REQUEST['deluser']){

			}else{
				$stmt = $db->prepare('DELETE FROM users WHERE id = :id') ;
				$stmt->execute(array(':id' => $_REQUEST['deluser']));

				$stmt = $db->prepare('DELETE FROM properties WHERE user_id = :id') ;
				$stmt->execute(array(':id' => $_REQUEST['deluser']));

				header('Location: ../profile.php');
				exit;
			}
			

		}
	} 

 ?>