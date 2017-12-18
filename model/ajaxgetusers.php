<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_REQUEST["id"])){
            include("../include/config.php");
            Include("getuser.php");
            $_REQUEST = array_map( 'stripslashes', $_REQUEST );

            //collect form data
            extract($_REQUEST);
            $_SESSION["user_to_update"] = null;
            $_SESSION["user_to_update"] = get_user_by_id($id,$db);
            echo json_encode($_SESSION["user_to_update"]);
            
        }
    }
?>