<!DOCTYPE html>
<html lang="en">
<?php
		include("include/head.php");
	?>
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
<!-- about -->
	<div class="services">
		<div class="container">
			<div class="w3layouts_header">
				<p><span><i class="fa fa-info-circle" aria-hidden="true"></i></span></p>
				<h5>Brief description <span>about us</span></h5>
			</div>
			<div style=" width: 50% !important; margin: 2mm auto !important;">
				<div class="col-md-6 agileinfo_about_left" style="width: 100% !important;">
					<h4>Etiam non turpis sit amet nisl lacinia vehicula ac sollicitudin ex blandit leo tempor</h4>
					<p>Phasellus pharetra velit eu felis pretium, nec eleifend ante varius. 
						Proin eget ante sit amet leo rhoncus scelerisque. Cum sociis natoque penatibus et 
						magnis dis parturient montes, nascetur ridiculus mus.
						<i>Etiam non turpis sit amet nisl lacinia vehicula ac sollicitudin ex. Maecenas 
						bibendum nisi purus, in ullamcorper nisl aliquam id.</i>
						Suspendisse maximus vestibulum consectetur. Aliquam erat volutpat. 
						Proin eu lacus at nulla commodo feugiat eleifend sit amet mauris.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- team -->
	<div class="skills">
		<div class="container">
			<div class="w3layouts_header w3_agile_head">
				<p><span><i class="fa fa-users" aria-hidden="true"></i></span></p>
				<h5>Our <span>Team</span></h5>
			</div>
			<div class="w3layouts_skills_grids">
				<div class="col-md-3 agile_team_grid">
					<div class="agileits_w3layouts_team_grid">
						<img src="images/Shaw.jpeg" alt=" " class="img-responsive centered-and-cropped" />
					</div>
					<h4>Mikhail Rene Shaw</h4>
					<p>Marketing Director</p>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="agileits_w3layouts_team_grid">
						<img src="images/13.jpg" alt=" " class="img-responsive" />
					</div>
					<h4>Agyei Masters</h4>
					<p>Sales Director</p>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="agileits_w3layouts_team_grid">
						<img src="images/14.jpeg" alt=" " class="img-responsive" />
					</div>
					<h4>Sherwaine Gooden</h4>
					<p>CEO</p>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="agileits_w3layouts_team_grid">
						<img src="images/15.jpg" alt=" " class="img-responsive" />
					</div>
					<h4>Wembley Williams</h4>
					<p>Phanton Director</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
<!-- stats -->
	<div class="services">
		<div class="container">
			<div class="w3layouts_header">
				<p><span><i class="fa fa-stack-exchange" aria-hidden="true"></i></span></p>
				<h5>Our <span>Stats</span></h5>
			</div>
			<div class="w3layouts_skills_grids">
				<div class="col-md-3 wthree_stats_grid">
					<div class="w3_agileits_stats_grid">
						<i class="fa fa-users" aria-hidden="true"></i>
						<h3>Skilled Employees</h3>
						<p class="counter w3_agile_counter">974</p>
					</div>
				</div>
				<div class="col-md-3 wthree_stats_grid">
					<div class="w3_agileits_stats_grid">
						<i class="fa fa-trophy" aria-hidden="true"></i>
						<h3>win awards</h3>
						<p class="counter w3_agile_counter1">527</p>
					</div>
				</div>
				<div class="col-md-3 wthree_stats_grid">
					<div class="w3_agileits_stats_grid">
						<i class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></i>
						<h3>creative designs</h3>
						<p class="counter w3_agile_counter2">646</p>
					</div>
				</div>
				<div class="col-md-3 wthree_stats_grid">
					<div class="w3_agileits_stats_grid">
						<i class="fa fa-line-chart" aria-hidden="true"></i>
						<h3>Market Stats</h3>
						<p class="counter w3_agile_counter3">458</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //stats -->
<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
  </script>
<!-- //flexSlider -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<?php
	include("include/footer.php");
?>
</body>
</html>