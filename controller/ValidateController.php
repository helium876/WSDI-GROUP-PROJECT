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
            $err = new PValErrors();
            // $err->setValErrors("fname error","lname error","telephone error","email error","trn error","password error", "password2 error");
            $err->setPropTypeErr(valdrop($_POST["proptype"]));
            $err->setLandErr(valdigit($_POST["land"]));
            $err->setBuildTypeErr(valdrop($_POST["buildtype"]));
            $err->setBedRmErr(valdrop($_POST["bedrm"]));
            $err->setBathRmErr(valdrop($_POST["bathrm"]));
            $err->setListTypeErr(valdrop($_POST["listtype"]));
            $err->setPriceErr(valdigit($_POST["price"]));
            $errs = array(
                $err->getPropTypeErr(),
                $err->getLandErr(),
                $err->getBuildTypeErr(),
                $err->getBedRmErr(),
                $err->getBathRmErr(),
                $err->getListTypeErr(),
                $err->getPriceErr()
            );
            echo json_encode($errs);
        }else if(isset($_REQUEST["lval"])){
            include "../model/LValErrors.php";
            $err = new LValErrors();
            // $err->setValErrors("fname error","lname error","telephone error","email error","trn error","password error", "password2 error");
            $err->setAddr1Err(valaddr($_POST["addr1"]));
            $err->setAddr2Err(valaddr($_POST["addr2"]));
            $err->setCityErr(valaddr($_POST["city"]));
            $err->setParishErr(valaddr($_POST["parish"]));
            $err->setCountryErr(valaddr($_POST["country"]));
            $errs = array(
                $err->getAddr1Err(),
                $err->getAddr2Err(),
                $err->getCityErr(),
                $err->getParishErr(),
                $err->getCountryErr(),
            );
            echo json_encode($errs);
        }
    }
?>