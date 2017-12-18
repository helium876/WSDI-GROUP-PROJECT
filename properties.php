<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<!-- properties -->
	<div class="services">
		<div class="container">
			<div class="w3layouts_header">
				<p><span><i class="fa fa-building-o" aria-hidden="true"></i></span></p>
				<h5>Our <span>Properties</span></h5>
			</div>
					<?php
						include("model/getproperties.php");

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
												<h3><a style="color: rgb(93, 204, 216)" href="property.com?id='.$thisprop["pid"].'">'.$thisprop["prop_name"].'</a>
													<button style="
															width: 20px; 
															height: 20px; 
															border-radius: 100%; 
															border: none; 
															background: transparent;" class="upPropBtn" data-id="'.$thisprop["pid"].'">
														<span>
															<i style="color: rgb(93, 204, 216);" class="fa fa-pencil-square-o" aria-hidden="true"></i>
														</span>
													</button>
												</h3>
											</div>
										</div>
									';
								}
							}
							echo "</div>";
							return $x;
						}

						for($x = 0; $x < $count; $x++){
							if($x % 3 == 0){
								$x = displayProperties($x, $count, $PROPS) - 1;
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