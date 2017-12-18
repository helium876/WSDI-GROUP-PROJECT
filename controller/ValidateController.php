<?php
    function valname($name){
        if(empty($name) || preg_match("/^[\s]*$/",$name) || preg_match("/^[-]*$/",$name) || !preg_match("/^[A-Z]{1}[a-zA-Z- ]*$/",$name)){
            return false;
        }else{
            return true;
        }
    }

    function valtel($tel){
        if(empty($tel) || !preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/",$tel)){
            return false;
        }else{
            return true;
        }
    }

    function valemail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        }else{
            return true;
        }
    }

    function valtrn($trn){
            if(empty($trn) || !preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/",$trn)){
                return false;
            }else{
                return true;
            }
    }

    function valpword($pword){
        if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W|_?).{8,}$/",$pword)){
            return false;
        }else if(preg_match("/^(?=.*\s).{0,}$/",$pword)){
            return false;
        }else{
            return true;
        }
    }

    function valrpword($rpword,$pword){
        if($rpword === $pword){
            return true;
        }else{
            return false;
        }
    }

    function valdrop($drop){
        if($drop == "title"){
            return false;
        }else{
            return true;
        }
    }

    function valdigit($digit){
        if(empty($digit)){
            return false;
        }else{
            if(!preg_match("/^[0-9]*$/",$digit)){
                return false;
            }else{
                return true;
            }
        }
    }

    function valaddr($addr){
        if(empty($addr)){
            return false;
        }else{
            return true;
        }
    }

    function valimage($img){
        //$ext = pathinfo($img["name"], PATHINFO_EXTENSION);
        if($img == null){
            return false;
        }elseif($img["type"] === "image/jpeg" || $img["type"] === "image/png"){
            return true;
        }else{
            return false;
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_REQUEST["valtype"])){
            if($_REQUEST["valtype"] == "name"){
                $name = $_POST["name"];
                if(!valname($name)){
                    echo false;
                }else{
                        echo true;
                }
            }else if($_REQUEST["valtype"] == "tel"){
                $tel = $_POST["tel"];
                if(!valtel($tel)){
                    echo false;
                }else{
                    echo true;
                }
            }else if($_REQUEST["valtype"] == "email"){
                $email = $_POST["email"];
                if(!valemail($email)){
                    echo false;
                }else{
                    echo true;
                }
            }else if($_REQUEST["valtype"] == "trn"){
                $trn = $_POST["trn"];
                if(!valtrn($trn)){
                    echo false;
                }else{
                    echo true;
                }
            }else if($_REQUEST["valtype"] == "pword"){
                $pword = $_POST["pword"];
                if(!valpword($pword)){
                    echo false;
                }else{
                    echo true;
                }
            }else if($_REQUEST["valtype"] == "rpword"){
                $pword = $_POST["pword"];
                $rpword = $_POST["rpword"];
                if(!valpword($rpword,$pword)){
                    echo false;
                }else{
                    echo true;
                }
            }else if($_REQUEST["valtype"] == "prop"){
                $prop = $_POST["prop"];
                if(!valdrop($prop)){
                    echo false;
                }else{
                    echo true;
                }
            }else if($_REQUEST["valtype"] == "num"){
                $num = $_POST["num"];
                if(!valdigit($num)){
                    echo false;
                }else{
                    echo true;
                }
            }else if($_REQUEST["valtype"] == "addr"){
                $addr= $_POST["addr"];
                if(!valaddr($addr)){
                    echo false;
                }else{
                    echo true;
                }
            }else if($_REQUEST["valtype"] == "image"){
                $img= $_FILES["preview"];
                if(!valimage($img)){
                    echo false;
                }else{
                    echo true;
                }
                //echo $ext = pathinfo($img["name"], PATHINFO_EXTENSION);
                //print_r($img);
            }
        }else if(isset($_REQUEST["rval"])){
            include "../model/RValErrors.php";
            $err = new RValErrors();
            // $err->setValErrors("fname error","lname error","telephone error","email error","trn error","password error", "password2 error");
            $err->setFnameErr(valname($_POST["fname"]));
            $err->setLnameErr(valname($_POST["lname"]));
            $err->setTelErr(valtel($_POST["tel1"]));
            $err->setEmailErr(valemail($_POST["email"]));
            $err->setTRNErr(valtrn($_POST["trn"]));
            $err->setPwordErr(valpword($_POST["password"]));
            $err->setRPwordErr(valrpword($_POST["rpassword"],$_POST["password"]));
            $errs = array(
                $err->getFnameErr(),
                $err->getLnameErr(),
                $err->getTelErr(),
                $err->getEmailErr(),
                $err->getTRNErr(),
                $err->getPwordErr(),
                $err->getRPwordErr()
            );
            echo json_encode($errs);
        }else if(isset($_REQUEST["pval"])){
            include "../model/PValErrors.php";
            include "../model/LValErrors.php";
            $perr = new PValErrors();
            $lerr = new LValErrors();
            // $err->setValErrors("fname error","lname error","telephone error","email error","trn error","password error", "password2 error");
            $perr->setPropTypeErr(valdrop($_POST["prop_type"]));
            $perr->setLandErr(valdigit($_POST["size"]));
            $perr->setBuildTypeErr(valdrop($_POST["build_type"]));
            $perr->setBedRmErr(valdrop($_POST["bed_num"]));
            $perr->setBathRmErr(valdrop($_POST["bath_num"]));
            $perr->setListTypeErr(valdrop($_POST["list_type"]));
            $perr->setPriceErr(valdigit($_POST["price"]));
            // $err->setValErrors("fname error","lname error","telephone error","email error","trn error","password error", "password2 error");
            $lerr->setAddr1Err(valaddr($_POST["street1"]));
            $lerr->setAddr2Err(valaddr($_POST["street2"]));
            $lerr->setCityErr(valaddr($_POST["city"]));
            $lerr->setParishErr(valaddr($_POST["parish"]));
            $lerr->setCountryErr(valaddr($_POST["country"]));
            $errs = array(
                valimage($_FILES["preview"]),
                $perr->getPropTypeErr(),
                $perr->getLandErr(),
                $perr->getBuildTypeErr(),
                $perr->getBedRmErr(),
                $perr->getBathRmErr(),
                $perr->getListTypeErr(),
                $perr->getPriceErr(),
                $lerr->getAddr1Err(),
                $lerr->getAddr2Err(),
                $lerr->getCityErr(),
                $lerr->getParishErr(),
                $lerr->getCountryErr(),
            );
            echo json_encode($errs);
        }
    }
?>