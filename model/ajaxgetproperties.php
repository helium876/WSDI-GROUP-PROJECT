<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_REQUEST["pid"])){
            include("../include/config.php");
            $prop = new Property($db);
            $_REQUEST = array_map( 'stripslashes', $_REQUEST );

            //collect form data
            extract($_REQUEST);
            echo json_encode($prop->get_property($pid));
        }
    }
?>