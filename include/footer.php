<!-- footer -->
	<div class="newsletter">
		<div class="container">
			<div class="w3ls_footer_grid">
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_leftl">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="w3ls_footer_grid_leftr">
						<h4>Location</h4>
						<p>206 Old Hope Road, Kingston 6, St. Andrew, JA.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_leftl">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>
					<div class="w3ls_footer_grid_leftr">
						<h4>Email</h4>
						<a href="mailto:info@example.com">info@micasa.com</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_leftl">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="w3ls_footer_grid_leftr">
						<h4>Call Us</h4>
						<p>(+1) 876 979 9999</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="w3l_footer_pos">
			<p>© 2017 MI CASA. All Rights Reserved | Design by <strong>Masters</strong>|<strong>Shaw</strong>|<strong>Gooden</strong></p>
			
		</div>
	</div>
<!-- //footer -->
<!-- gauge-meter -->
	<script src="js/jquery.gauge.js"></script>
	<script>
		$(document).ready(function (){
			$("#gauge1").gauge(30,{color: "#fb5710",unit: " %",type: "halfcircle"});
			$("#gauge2").gauge(70, {color: "#a821e7", unit: " %",type: "halfcircle"});
			$("#gauge3").gauge(75, {color: "#fbb810",unit: " %",type: "halfcircle"});
			$("#gauge4").gauge(90, {color: "#21d0e7",unit: " %",type: "halfcircle"});
		});
	</script>
<!-- //gauge-meter -->
<!-- range -->
	<script type="text/javascript" src="js/jquery-ui.js"></script>		
	<script type='text/javascript'>//<![CDATA[ 
		$(window).load(function(){
		 $( "#slider-range" ).slider({
					range: true,
					min: 0,
					max: 900,
					values: [ 50, 600 ],
					slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
					}
		 });
		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

		});//]]>  
	</script>
<!-- //range -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->