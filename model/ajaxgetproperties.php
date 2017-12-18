<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_REQUEST["pid"])){
            include("../include/config.php");
            $prop = new Property($db);
            $_REQUEST = array_map( 'stripslashes', $_REQUEST );

            //collect form data
            extract($_REQUEST);
            $_SESSION["prop_to_update"] = null;
            $_SESSION["prop_to_update"] = $prop->get_property($pid);
            echo json_encode($_SESSION["prop_to_update"]);
            
        }
    }
?>