<?php
    #Author: Agyei Masters
	if(isset($_REQUEST['delprop'])){ 

		//if property id is 1 ignore
		if($_REQUEST['delprop'] !='1'){
			include("../include/config.php");	
			$stmt = $db->prepare('DELETE FROM properties WHERE pid = :pid') ;
			$stmt->execute(array(':pid' => $_REQUEST['delprop']));

			header('Location: ../profile.php');
			exit;

		}
	} 

 ?>