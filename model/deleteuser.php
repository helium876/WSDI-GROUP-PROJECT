<?php 
	if(isset($_GET['deluser'])){ 

		//if user id is 1 ignore
		if($_GET['deluser'] !='1'){

			$stmt = $db->prepare('DELETE FROM users WHERE id = :id') ;
			$stmt->execute(array(':id' => $_GET['deluser']));

			header('Location: users.php?action=deleted');
			exit;

		}
	} 

 ?>