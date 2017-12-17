<?php 
	if(isset($_GET['deluser'])){ 

		//if user id is 1 ignore
		if($_GET['deluser'] !='1'){

			$stmt = $db->prepare('DELETE FROM properties WHERE pid = :pid') ;
			$stmt->execute(array(':id' => $_GET['deluser']));

			//header('Location: properties.php?action=deleted');
			exit;

		}
	} 

 ?>