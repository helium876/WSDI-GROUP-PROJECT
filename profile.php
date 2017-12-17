<?php 
	/*
		if(!isset($_SESSION["loggedIn"])){

		}
	*/
?>

<!DOCTYPE html>
<html lang="en">
<?php include("include/head.php"); ?>

<style>
	.centered-and-cropped { object-fit: cover }

	button:active{
		outline: none;
	}
	button:focus{
		outline: none;
	}

	.modal-title{
		font-size: 14px !important;
	}
</style>
<body>
    <header>
        <?php include("include/header.php"); ?>
    </header>

    <div class="container">
		<div  style="width: 200px !important; margin: 10mm auto 5mm auto !important; z-index: 2;">
			<div style="width: 160px !important; 
						height: 160px !important;
						border-radius: 100% !important;
						background-color: white;">
				<img class="centered-and-cropped"
				src="images/avatars/no_image.png" 
				style="	width: 160px !important; 
						height: 160px !important;
						border-radius: 100% !important;
						background: white !important;"/>			
			</div>
			
		</div>
        
        <hr style="margin-top: -70px !important; width: 70%; border-color: black; z-index: -10 !important;"/>
        <div class="w3layouts_header" style="margin-top: 100px !important;">
            <h5 style="margin-left: -12mm !important; cursor: pointer;" id="userName">
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

		<div class="container" id="userInfo" hidden>
			<div class="w3layouts_header" style="margin-top: 10px !important;">
            <h5 style="margin-left: -20mm !important; font-size: 16px !important;">
                Your Info 
				<button style="
								width: 20px; 
								height: 20px; 
								border-radius: 100%; 
								border: none; 
								background: transparent;"
								data-toggle="modal" data-target="#updateUserModal">
					<span>
						<i style="color: rgb(93, 204, 216);" class="fa fa-pencil-square-o" aria-hidden="true"></i>
					</span>
				</button>
            </h5>
        	</div >
			<?php
				$mname = "";
				if(isset($_SESSION["mname"])){
					$mname = $_SESSION["mname"];
				}

				$tel2 = "";
				
				/*echo '
					<div style=\"width: 300px !important; margin: 5mm auto !important; \">
					<ul class=\"list-group\" style=\"margin-left: -18mm !important;\">
					<li class=\"list-group-item\">$_SESSION["fname"] $mname $_SESSION["Lname"]</li>
					<li class=\"list-group-item\">$_SESSION["email"]</li>
					<li class=\"list-group-item\">$_SESSION["tel1"]</li>';
					if(isset($_SESSION["tel2"])){
						echo '
							<li class=\"list-group-item\">$_SESSION["tel2"]</li>
							</ul>
							</div>		
						';
					}else{
						echo "
							</ul>
							</div>		
						";
					}*/
				echo "
					<div style=\"width: 300px !important; margin: 5mm auto !important; \">
					<ul class=\"list-group\" style=\"margin-left: -18mm !important;\">
					<li class=\"list-group-item\">John $mname Doe</li>
					<li class=\"list-group-item\">boebot13@gmail.com</li>
					<li class=\"list-group-item\">876-999-9999</li>";
					if(isset($_SESSION["tel2"])){
						echo '
							<li class=\"list-group-item\">$_SESSION["tel2"]</li>
							</ul>
							</div>		
						';
					}else{
						echo "
							</ul>
							</div>		
						";
					}
			?>
			<button type="button" id="infoClose"></button>
		</div>

		<div class="container" id="userPropertiesContainer">
			<div class="w3layouts_header" style="margin-top: 15px !important;">
				<h5 style="margin-left: -12mm !important; cursor: pointer;" id="userName">
					Your Properties
					<button style="
									width: 20px; 
									height: 20px; 
									border-radius: 100%; 
									border: none; 
									background: transparent;"
									data-toggle="modal" data-target="#addPropModal">
						<span>
							<i style="color: rgb(93, 204, 216);" class="fa fa-plus-square-o" aria-hidden="true"></i>
						</span>
					</button>
				</h5>
				<div style="margin-left: -11mm !important; margin-top: -10px !important;">
					<hr style="width: 300px !important; border-color: darkgrey">
				</div>

				<div class="container">
					<?php
						function displayProperties($index){
							echo '<div class="row">';
							for($x = $index; $x < $index + 1; $x++){
								if(true){
									echo '
										<div class="col-m4">
										</div>
									';
								}
							}
							echo "<div>";
						}
					?>
				</div>
				
        	</div>

		</div>

		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateUserModal">
			Update User
		</button>

		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPropModal">
			Add Property
		</button>

		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updatePropModal">
			Update Property
		</button>

		<div class="modal fade" id="addPropModal" tabindex="-1" role="dialog" aria-labelledby="addPropModal" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" >Property</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container" style="width: 100% !important;">
						<?php
						include("include/addproperty.php");
						?>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="addPropModal" tabindex="-1" role="dialog" aria-labelledby="addPropModal" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" >Property</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
						include("include/addproperty.php");
					?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="updateUserModal" tabindex="-1" role="dialog" aria-labelledby="updateuserModal" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" >Your Info</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
						include("include/updateUser.php");
					?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
		</div>


        
    </div>

<script src="js/classie.js"></script>
<script>
	(function() {
		// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
		if (!String.prototype.trim) {
			(function() {
				// Make sure we trim BOM and NBSP
				var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
				String.prototype.trim = function() {
					return this.replace(rtrim, '');
				};
			})();
		}

		[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
			// in case the input is already filled..
			if( inputEl.value.trim() !== '' ) {
				classie.add( inputEl.parentNode, 'input--filled' );
			}

			// events:
			inputEl.addEventListener( 'focus', onInputFocus );
			inputEl.addEventListener( 'blur', onInputBlur );
		} );

		function onInputFocus( ev ) {
			classie.add( ev.target.parentNode, 'input--filled' );
		}

		function onInputBlur( ev ) {
			if( ev.target.value.trim() === '' ) {
				classie.remove( ev.target.parentNode, 'input--filled' );
			}
		}
	})();
</script>

<script>
	$(document).ready(function(){
		$('#userName').click(() => {
			$("#userInfo").animate({height: 'toggle'});
		});
	});
</script>

    <?php include("include/footer.php"); ?>
</body>
</html>