<?php
    #Author: Agyei Masters
    $PROPS = array();
    $count = 0;
    try {      
      $stmt = $db->query('SELECT pid, user_id, prop_name, prop_type, size, build_type, bed_num, bath_num, list_type, price, preview, rented, street1, street2, city, parish, country, time_stamp FROM properties ORDER BY time_stamp DESC');
      while($row = $stmt->fetch()){
          $PROPS[$count] = $row;
          $count++;
      }

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>