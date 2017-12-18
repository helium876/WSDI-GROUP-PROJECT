<?php
    function get_user_by_id($id, $db){
        try {      
            $stmt = $db->prepare('SELECT * FROM users WHERE id = :id');
            $stmt->execute(array(':id' => $id));
            return $user = $stmt->fetch();

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    function get_users($db){
        try {      
            $stmt = $db->query('SELECT * FROM users');
            $count = 0;
            while($row = $stmt->fetch()){
            $user[$count] = $row;
            $count++;
            }
            return $user;

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
?>