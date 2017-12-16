<?php 

?>

<!DOCTYPE html>
<html lang="en">
<?php include("include/head.php"); ?>
<body>
    <header>
        <?php include("include/header.php"); ?>
    </header>

    <div class="container">
        <img src="images/avatars/no_image.png"/>
        <hr/>
        <div class="w3layouts_header">
            <h5>
                <?php 
                    /*echo $_SESSION["fname"];
                    if(isset($_SESSION["mname"])){
                        echo " ".$_SESSION["mname"];
                    }
                    echo " ".$_SESSION["lname"];*/
                    echo "John Doe";
                ?>
            </h5>
        </div>
        
    </div>

    <?php include("include/footer.php"); ?>
</body>
</html>