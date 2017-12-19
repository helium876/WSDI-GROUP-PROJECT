<?php
    #Author: Agyei Masters
	if(isset($_POST['submit'])){

		$_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

			include("../include/config.php");
			
			//checking if fields are empty
			if($prop_type == null || $prop_type == 'undefined'){
				$_SESSION["prop_typeERR"] = true;
			}else{
				$_SESSION["prop_typeERR"] = null;
			}
			if($list_type == null || $list_type == 'undefined'){
				$_SESSION["list_typeERR"] = true;
			}else{
				$_SESSION["list_typeERR"] = null;
			}
			if($parish == null || $parish == 'undefined'){
				$_SESSION["parishERR"] = true;
			}else{
				$_SESSION["parishERR"] = null;
			}
			if($bed_num == null || $bed_num == 'undefined'){
				$_SESSION["bed_numERR"] = true;
			}else{
				$_SESSION["bed_numERR"] = null;
			}
			if($bath_num == null || $bath_num == 'undefined'){
				$_SESSION["bath_numERR"] = true;
			}else{
				$_SESSION["bath_numERR"] = null;
			}
			if($price == null || $price == 'undefined'){
				$_SESSION["priceERR"] = true;
			}else{
				$_SESSION["priceERR"] = null;
			}

			//if empty set order yen but still go back to properties to show u have errors
			if($_SESSION["prop_typeERR"] || $_SESSION["list_typeERR"] || $_SESSION["parishERR"] || $_SESSION["bed_numERR"] || $_SESSION["bath_numERR"] || $_SESSION["priceERR"]){
				$_SESSION["order"] = true;
				header("location: ../properties.php?bleh=".$_SESSION["parish"]."");
				return false;
			}


			$PROPS= array();
			$count = 0;
		try {
      		
      		$stmt = $db->query("SELECT * FROM properties WHERE prop_type = '$prop_type' AND bed_num = '$bed_num' AND bath_num = '$bath_num' AND list_type = '$list_type' AND parish = '$parish' ORDER BY time_stamp DESC");
      			while($row = $stmt->fetch()){
					$PROPS[$count] = $row;
      			}

				  $_SESSION["ordered_props"] = $PROPS;
				  $_SESSION["order"] = true;
				  header("location: ../properties.php?order=TRUE");

    	} catch(PDOException $e) {
        	echo $e->getMessage();
    	}
	}
?>