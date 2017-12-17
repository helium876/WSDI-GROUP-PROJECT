<?php
    try {
      $count = 0;
      $stmt = $db->query('SELECT pid, prop_name, prop_type, size, build_type, bed_num, bath_num, list_type, price, preview, rented, street1, street2, city, parish, country, time_stamp FROM properties ORDER BY time_stamp DESC');
      while($row = $stmt->fetch()){

      }

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>