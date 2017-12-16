<?php
    $fnErr = $lnErr = $telErr = $emErr = $trnErr = $pwErr = $rpwErr = "";
    $cnErr = $cemErr = $cbErr == "";
    if($_SERVER["REQUEST_MOTHOD"] == "POST"){
        if(isset($_REQUEST["reg"])){
            if(empty($_POST["fname"]) || !preg_match("/^[A-Z][a-z]*$/", $_POST["fname"]) || strlen($_POST["fname"]) < 2){
                $fnErr = "Invalid First Name Entered";
            }

            if(empty($_POST["lname"]) || !preg_match("/^[A-Z][a-z]*$/", $_POST["lname"]) || strlen($_POST["lname"]) < 2){
                $lnErr = "Invalid Last Name Entered";
            }

            if(empty($_POST["tel1"]) || !preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $_POST["tel1"])){
                $telErr = "Invalid Telephone number";
            }

            if(empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                $emErr = "Invalid Email Address";
            }

            if(empty($_POST["trn"]) || !preg_match("/^[A-Z][a-z]*$/", $_POST["trn"])){
                $trnErr = "Invalid TRN Entered";
            }

            if(empty($_POST["password"]) || !preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W|_?).{8,}$/",$_POST["password"]){
                $pwErr = "Password must contain: >8 characters, >= 1 number, >= 1 special character";
            }

            if(empty($_POST["rpassword"]) || $_POST["rpassword"] != $_POST["password"]){
                $rpwErr = "Passwords must match";
            }
        }else if(isset($_REQUEST["log"])){

        }else if(isset($_REQUEST["mail"])){

        }
    }
?>