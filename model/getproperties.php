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
    $PROPS = array();
    try {
      $count = 0;
      $stmt = $db->query('SELECT pid, user_id, prop_name, prop_type, size, build_type, bed_num, bath_num, list_type, price, preview, rented, street1, street2, city, parish, country, time_stamp FROM properties ORDER BY time_stamp DESC');
      while($row = $stmt->fetch()){
          $PROPS[$count] = $row;
          $count++;
      }

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>