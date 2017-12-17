<!DOCTYPE html>
<html lang="en">
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
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-6 w3layouts_banner_bottom_left">
				<h3>real estate investing, even on a very small scale, remains a tried and true 
					means of building an individual's cash flow and wealth</h3>
			</div>
			<div class="clearfix"> </div>
			<div class="w3_banner_bottom_pos">
				<form action="#" method="post">
					<h2>Find a property</h2>
					<div class="agile_book_section_top">
						<select onchange="change_country(this.value)" required="">
							<option value="">Filter By Keywords</option>
							<option value="">Property By Id</option>
							<option value="">Location</option>         
							<option value="">Type</option>
							<option value="">Status</option>
							<option value="">Price</option>
						</select>
					</div>
					<div class="agileits_w3layouts_book_section_single">
						<div class="w3_agileits_section_room">
							<select onchange="change_country(this.value)" required="">
								<option value="">Any Type</option>
								<option value="">Single</option>         
								<option value="">Duplex</option>
								<option value="">Retail</option>
								<option value="">Multi Family</option>
							</select>
						</div>	
						<div class="w3_agileits_section_room">
							<select onchange="change_country(this.value)" required="">
								<option value="">Parish</option>
								<option value="">Australia</option>         
								<option value="">Sweden</option>
								<option value="">Netherlands</option>
								<option value="">Bangkok</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="bath">
						<h4>Bed rooms</h4>
						<input type="number" class="text_box" value="3" min="1">
					</div>
					<div class="bath">
						<h4>Bath rooms</h4>
						<input type="number" class="text_box" value="4" min="1">	
					</div>
					<div class="clearfix"></div>
					<div class="wthree_range_slider">
						<h4>Price range</h4>
						<div id="slider-range"></div>	
						<select id="amount" name="">
								<option value="">Less Than $1,000,000</option>
								<option value="">$1,000,001 - $3,000,000</option>
								<option value="">$3,000,001 - $5,000,000</option>
								<option value="">Greater Than $5,000,000</option>
							</select>
							
					</div>
					<input type="submit" value="Find properties">
				</form>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- services -->
	<div class="services">
		<div class="container">
			<div class="w3layouts_header">
				<p><span><i class="fa fa-key" aria-hidden="true"></i></span></p>
				<h5>Our <span>Services</span></h5>
			</div>
			<div class="w3_services_grids">
				<div class="col-md-4 w3l_services_grid">
					<div class="w3ls_services_grid agileits_services_grid">
						<div class="agile_services_grid1_sub">
							<p>$ 32,000</p>
						</div>
						<div class="agileinfo_services_grid_pos">
							<i class="fa fa-user-o" aria-hidden="true"></i>
						</div>
					</div>
					<div class="wthree_service_text">
						<h3>2 Bedroom house for rent</h3>
						<h4 class="w3_agileits_service">Reality Agency</h4>
						<ul>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
							<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							<li>(543)</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 w3l_services_grid">
					<div class="w3ls_services_grid agileits_services_grid2">
						<div class="agile_services_grid1_sub agileits_w3layouts_ser_sub1">
							<p>$ 12,000</p>
						</div>
						<div class="agileinfo_services_grid_pos agile_services_grid_pos1">
							<i class="fa fa-bath" aria-hidden="true"></i>
						</div>
					</div>
					<div class="wthree_service_text">
						<h3>High rise Buildings for rent</h3>
						<h4 class="w3_agileits_service2">Reality Agency</h4>
						<ul>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
							<li>(4321)</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 w3l_services_grid">
					<div class="w3ls_services_grid agileits_services_grid1">
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
				</div>
				<div class="col-md-6 w3l_services_grid">
					<div class="w3ls_services_grid agileits_services_grid3">
						<div class="agile_services_grid1_sub agileits_w3layouts_ser_sub2">
							<p>$ 23,543</p>
						</div>
						<div class="agileinfo_services_grid_pos agile_services_grid_pos2">
							<i class="fa fa-home" aria-hidden="true"></i>
						</div>
					</div>
					<div class="wthree_service_text">
						<h3>Low rise Buildings for rent</h3>
						<h4 class="w3_agileits_service3">Reality Agency</h4>
						<ul>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
							<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							<li>(231)</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 w3l_services_grid">
					<div class="w3ls_services_grid agileits_services_grid4">
						<div class="agile_services_grid1_sub agileits_w3layouts_ser_sub3">
							<p>$ 45,426</p>
						</div>
						<div class="agileinfo_services_grid_pos agile_services_grid_pos3">
							<i class="fa fa-home" aria-hidden="true"></i>
						</div>
					</div>
					<div class="wthree_service_text">
						<h3>Low rise Buildings for rent</h3>
						<h4 class="w3_agileits_service4">Reality Agency</h4>
						<ul>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star" aria-hidden="true"></i></li>
							<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
							<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
							<li>(653)</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
<!-- skills -->
	<div class="skills">
		<div class="container">
			<div class="w3layouts_header w3_agile_head">
				<p><span><i class="fa fa-bullseye" aria-hidden="true"></i></span></p>
				<h5>Our <span>Skills</span></h5>
			</div>
			<div class="w3layouts_skills_grids">
				<div class="col-md-3 w3ls_about_guage">
					<h4>Make Money</h4>
					<canvas id="gauge1" width="200" height="100"></canvas>
				</div>
				<div class="col-md-3 w3ls_about_guage">
					<h4>Matching Buyer</h4>
					<canvas id="gauge2" width="200" height="100"></canvas>
				</div>
				<div class="col-md-3 w3ls_about_guage">
					<h4>Market Appraisals</h4>
					<canvas id="gauge3" width="200" height="100"></canvas>
				</div>
				<div class="col-md-3 w3ls_about_guage">
					<h4>Support</h4>
					<canvas id="gauge4" width="200" height="100"></canvas>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //skills -->
<!-- featured-services -->
	<div class="services">
		<div class="container">
			<div class="w3layouts_header">
				<p><span><i class="fa fa-building-o" aria-hidden="true"></i></span></p>
				<h5>Our <span>Featured</span> Services</h5>
			</div>
			<div class="w3layouts_skills_grids w3layouts_featured_services_grids">
				<div class="col-md-6 w3_featured_services_left">
					<div class="w3_featured_services_left_grid">
						<div class="col-xs-4 w3_featured_services_left_gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-cubes"> </i>
							</div>
						</div>
						<div class="col-xs-8 w3_featured_services_left_gridr">
							<h4>lacinia vehicula ac aliquam</h4>
							<p>Maecenas bibendum nisi purus, in ullamcorper nisl aliquam id.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3_featured_services_left_grid">
						<div class="col-xs-4 w3_featured_services_left_gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-handshake-o"> </i>
							</div>
						</div>
						<div class="col-xs-8 w3_featured_services_left_gridr">
							<h4>eget blandit leo tempor nisi</h4>
							<p>Maecenas bibendum nisi purus, in ullamcorper nisl aliquam id.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3_featured_services_left_grid">
						<div class="col-xs-4 w3_featured_services_left_gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-globe"> </i>
							</div>
						</div>
						<div class="col-xs-8 w3_featured_services_left_gridr">
							<h4>tincidunt urna egestas non</h4>
							<p>Maecenas bibendum nisi purus, in ullamcorper nisl aliquam id.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3_featured_services_left_grid">
						<div class="col-xs-4 w3_featured_services_left_gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-gear"> </i>
							</div>
						</div>
						<div class="col-xs-8 w3_featured_services_left_gridr">
							<h4>nullam elementum blandit dui</h4>
							<p>Maecenas bibendum nisi purus, in ullamcorper nisl aliquam id.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3_featured_services_left_grid">
						<div class="col-xs-4 w3_featured_services_left_gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-hotel"> </i>
							</div>
						</div>
						<div class="col-xs-8 w3_featured_services_left_gridr">
							<h4>ullamcorper nisl aliquam</h4>
							<p>Maecenas bibendum nisi purus, in ullamcorper nisl aliquam id.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 w3_featured_services_right">
					<img src="images/7.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //featured-services -->
<?php
	include("include/footer.php");
?>
</body>
</html>