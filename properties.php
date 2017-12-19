<!DOCTYPE html>
<?php
		include("include/head.php");
	?>
<body>
<!-- header -->
	<header>
		<?php
			include("include/header.php");
		?>
	</header>
<!-- header -->
<!-- banner-bottom -->
	<?php
		//setting the error variables
		if(isset($_SESSION["order"])){
			if(!$_SESSION["order"]){
				$_SESSION["prop_typeErr"] = null;
				$_SESSION["list_typeErr"] = null;
				$_SESSION["parishErr"] = null;
				$_SESSION["bed_numErr"] = null;
				$_SESSION["bath_numErr"] = null;
				$_SESSION["priceErr"] = null;
				$_SESSION["price_rangeErr"] = null;
			}
		}else{
		
				$_SESSION["prop_typeErr"] = null;
				$_SESSION["list_typeErr"] = null;
				$_SESSION["parishErr"] = null;
				$_SESSION["bed_numErr"] = null;
				$_SESSION["bath_numErr"] = null;
				$_SESSION["priceErr"] = null;
				$_SESSION["price_rangeErr"] = null;
		}
	?>
	<div class="banner-bottom">
		<div class="container">
			<div class="clearfix"> </div>
			<div class="w3_banner_bottom_pos">
				<form action="model/search.php" method="post">
					<h2>Find Property</h2>
					<div class="wthree_range_slider">
						<h4>Price</h4>
						<input type="text" name="price" id="" style="
							border: none;
							width: 100%;
							height: 10mm;
							padding: 1mm;
							font-weight: 600;
						">
					</div>
					<div class="agileits_w3layouts_book_section_single">
						<div class="w3_agileits_section_room">
							<select onchange="change_country(this.value)" required="" name="prop_type">
								<option value="selected">Property Type</option>
                                <option value="Vacant Lot">Vacant Lot</option>
                                <option value="Residential">Residential</option>
                                <option value="Commercial">Commercial</option>
							</select>
						</div>	
						<div class="w3_agileits_section_room">
							<select onchange="change_country(this.value)" required="" name="parish">
								<option value="selected">Parish</option>
								<option value="Clarendon">Clarendon</option>
								<option value="Hanover">Hanover</option>
								<option value="Kingston">Kingston</option>
								<option value="Portland">Portland</option>         
								<option value="Manchester">Manchester</option>
								<option value="St. Andrew">St. Andrew</option>
								<option value="ST. Ann">St. Ann</option>
								<option value="St. Cathering">St. Catherine</option>
								<option value="St. Elizabeth">St. Elizabeth</option>
								<option value="St. James">St. James</option>
								<option value="St. Mary">St. Mary</option>
								<option value="St. Ann">St. Thomas</option>
								<option value="Trelawny">Trelawny</option>
								<option value="Westmoreland">Westmoreland</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="bath">
						<h4>Bed rooms</h4>
						<select id="bed" name="bed_num">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3+</option>
							</select>
					</div>
					<div class="bath">
						<h4>Bath rooms</h4>
						<select id="bath" name="bath_num">
								<option value="1">1</option>
								<option value="1 1/2">1 1/2</option>
								<option value="2">2</option>
								<option value="3+">3+</option>
							</select>	
					</div>
					<div class="clearfix"></div>
					<div class="wthree_range_slider">
						<h4>Listing</h4>
						<div id="slider-range"></div>	
						<select id="amount" name="list_type">
								<option value="Rent">Rent</option>
								<option value="Purchase">Purchase</option>
							</select>
							
					</div>
					<div class="wthree_range_slider">
						<h4>Price range</h4>
						<div id="slider-range"></div>	
						<select id="amount" name="price_range">
								<option value="> 1000000">Less Than $1,000,000</option>
								<option value="< 1000000 && > 3000001">$1,000,001 - $3,000,000</option>
								<option value="< 3000000 && > 5000001">$3,000,001 - $5,000,000</option>
								<option value="> 5000000">Greater Than $5,000,000</option>
							</select>
							
					</div>
					<input type="submit" value="Find properties" name="submit">
				</form>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- properties -->
	<div class="services">
		<div class="container">
			<div class="w3layouts_header">
				<p><span><i class="fa fa-building-o" aria-hidden="true"></i></span></p>
				<h5>Our <span>Properties</span></h5>
			</div>
					<?php
						//outputs the html for the propertiies
						function displayProperties($index, $count, $props){
							echo '<div class="w3_services_grids">';
							$x;
							for($x = $index; $x < $index + 3; $x++){
								if($x + 1 > $count){
									break;
								}
								$thisprop = $props[$x];								
								if(true){
									echo '
										
										<div class="col-md-4 w3l_services_grid" 
												data-id="'.$thisprop["pid"].'"
													>
											<div class="w3ls_services_grid agileits_services_grid" id="proppic'.$thisprop["pid"].'">
												<style>
													#proppic'.$thisprop["pid"].' {
														background: url("images/previews/'.$thisprop["preview"].'") no-repeat 0px 0px !important;
														background-size: 100% !important;
														-webkit-background-size: 100% !important;
														-moz-background-size: 100% !important;
														-o-background-size: 100% !important;
														-ms-background-size: 100% !important;
														border-bottom: 3px solid #10b5fb;
													}
												</style>
												<div class="agile_services_grid1_sub">
													<label style="padding: 1mm !important; background-color: #10b5fb; color: white;">$'.$thisprop["price"].'</label>
												</div>
												<div class="agileinfo_services_grid_pos">
													<i class="fa fa-home" aria-hidden="true"></i>
												</div>
											</div>
											<div class="wthree_service_text">
												<h3><a style="color: rgb(93, 204, 216)" href="property.php?id='.$thisprop["pid"].'">'.$thisprop["prop_name"].'</a>
												
												</h3>
												<label>'.$thisprop["city"].', </label>&nbsp<label>'.$thisprop["parish"].'</label>
											</div>
										</div>
									';
								}
							}
							echo "</div>";
							return $x;
						}

						//checks if the properties should be ordered or not
						if(isset($_REQUEST["order"])){
							if($_REQUEST["order"] == "TRUE"){
								if($_SESSION["order"]){
									for($x = 0; $x < count($_SESSION["ordered_props"]); $x++){
										if($x % 3 == 0){
											$x = displayProperties($x, count($_SESSION["ordered_props"]), $_SESSION["ordered_props"]) - 1;
										}
									}
								}else{
									header("location: properties.php");
								}
							}else{
									header("location: properties.php");
							}
							

						}else{
							include("model/getproperties.php");
							$_SESSION["ordered_props"] = null;
				  			$_SESSION["order"] = false;
							for($x = 0; $x < $count; $x++){
								if($x % 3 == 0){
									$x = displayProperties($x, $count, $PROPS) - 1;
								}
							}
						}
						
					?>
			
				<!--<div class="col-md-4 w3l_services_grid">
					<div class="w3ls_services_grid agileits_services_grid7">
						<div class="agile_services_grid1_sub agileits_w3layouts_ser_sub">
							<p>$ 45,000</p>
						</div>
						<div class="agileinfo_services_grid_pos agile_services_grid_pos">
							<i class="fa fa-home" aria-hidden="true"></i>
						</div>
					</div>
					<div class="wthree_service_text">
						<h3>Big luxury house for rent</h3>
						<h4 class="w3_agileits_service1">Reality Agency</h4>
						<ul>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
							<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							<li>(854)</li>
						</ul>
					</div>
				</div>-->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //properties -->
<?php
	include("include/footer.php");
?>
</body>
</html>