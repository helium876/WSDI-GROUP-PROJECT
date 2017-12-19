<!DOCTYPE html>
<?php
		include("include/head.php");

        if(isset($_REQUEST["id"])){
        //include("classes/class.property.php");

        $prop = new Property($db);
        $thisProp = $prop->get_property($_REQUEST["id"]);

        include("model/getuser.php");
        $propUser = get_user_by_id($thisProp["user_id"], $db);

        }else{
            header("location: properties.php");
        }
	?>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </head>
    <style>
        .centered-and-cropped { object-fit: cover }
    </style>
<body>
<!-- header -->
	<header>
		<?php
			include("include/header.php");
		?>
	</header>
<!-- header -->
<!-- properties -->
	<div class="services">
		<div class="container">
			<div class="w3layouts_header">
				<p><span><i class="fa fa-building-o" aria-hidden="true"></i></span></p>
				<h5><?php echo $thisProp["prop_name"];?></h5>
			</div>
            <br><br>
            <div class="container propContainer" >
                <!--<div class="popover bs-popover-right bs-popover-right-docs">
                    <div class="arrow"></div>
                    <h3 class="popover-header">Popover right</h3>
                    <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                    </div>
                </div>-->
                <div class="popoverContainer"
                            style="
                                width: 70%;
                                margin: auto !important;
                            ">
                    <label type="button" 
                        class="btn btn-lg btn-danger" 
                        style="
                            float: right;
                            display: none;
                        "                         
                        id="popoverBtn"
                        hidden>Click to toggle popover</label>
                </div>
                <img    src="<?php echo "images/previews/".$thisProp["preview"];?>" 
                        alt="" 
                        class="centered-and-cropped"
                        data-toggle="popover"
                        id="popoverImg"
                        style="
                            width: 70% !important;
                            height: 400px !important;
                            display: block !important;
                            margin: auto !important;
                        ">
                <br>
                <div class="propDataContainer" 
                    style="
                        width: 65% !important;
                        margin: auto !important;
                    ">
                    <div class="propInfo"
                        style="
                            float: left;
                        ">
                      <?php echo "
                            <label>Property: ".$thisProp["prop_type"]."</label><br>
                            <label>land Size: ".$thisProp["size"]." km</label><br>
                            <label>Type: ".$thisProp["build_type"]."</label><br>
                            <label>Bedrooms: ".$thisProp["bed_num"]."</label><br>
                            <label>Bathrooms: ".$thisProp["bath_num"]."</label><br>
                            <label>Listing: ".$thisProp["list_type"]."</label><br>
                            <label >Price: <span style=\"color: rgb(93, 204, 216)\">$".$thisProp["price"]."<span></label><br>
                    ";?>  
                    </div>
                    <div class="addrCont" 
                        style="
                            float: right;
                        ">
                    <?php echo "
                            <label>".$thisProp["street1"]."</label><br>
                            <label>".$thisProp["street2"]."</label><br>
                            <label>".$thisProp["city"]."</label><br>
                            <label>".$thisProp["parish"]."</label><br>
                            <label>".$thisProp["country"]."</label><br>
                    ";?>
                    </div>
                    <div class="clear-fix"></div>
                </div>
            </div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //properties -->
<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover({
            container: '.popoverContainer',
            title: 'Post By:',
            trigger:'hover',
            html: true,
            content: '<?php echo $propUser["fname"]." ".$propUser["mname"]." ".$propUser["lname"]." <br>Contact: <br>Telephone: ".$propUser["tel1"]."<br>Alternative: ".$propUser["tel2"]."<br>Email: ".$propUser["email"]; ?>'
        });
        //$('#popoverImg').click();
    });
</script>
<?php
	include("include/footer.php");
?>
</body>
</html>