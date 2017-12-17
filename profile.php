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

		<hr>

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
					<h5 class="modal-title" >Property</h5>
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

    <?php include("include/footer.php"); ?>
</body>
</html>