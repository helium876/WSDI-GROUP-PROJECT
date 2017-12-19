<?php
	
?>
<div class="header">
    <div class="container">
        <div class="w3_agile_logo">
            <!-- <h1><a href="index.php"><span>T</span>enements</a></h1> -->
            <a href="index.php"><img src="images/logo.png" width="300px"></a>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- banner -->
	<div class="banner">
		<div class="container"> 
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-12">
						<ul class="nav navbar-nav w3_agile_nav">
							<li><a href="index.php"><span>Home</span></a></li>
							<li><a href="properties.php"><span>Properties</span></a></li>
							<li><a href="about.php"><span>About Us</span></a></li>
							<li><a href="mail.php"><span>Contact Us</span></a></li>
							<?php
								if($user->is_logged_in()){
									echo '<li><a href="profile.php"><span>Profile</span></a></li>';
									echo '<li><a href="include/logout.php"><span>Logout</span></a></li>';
								}else{
									echo '<li><a href="login.php"><span>Login</span></a></li>';
								}
							?>							
							
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- //banner -->
<script>
	$(document).ready(function(){
		var path = window.location.pathname.split("/");
		$('.nav li a[href="'+path[1]+'"]').parent().addClass("active");
		//alert(path[1]);
	});
</script>

