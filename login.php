<!DOCTYPE html>
<html lang="en">
<?php
    include("include/head.php");
    if($user->is_logged_in()){
		header("location: profile.php");
	}

    $emailVal = $passwordVal = $err = "";

    if(isset($_POST["submit"])){
        $_POST = array_map( 'stripslashes', $_POST );

		//collect form data
		extract($_POST);

        $emailVal = $email;
        $passwordVal = $password;

        if($user->login($email,$password)){
            header("location:profile.php");
        }else{
            $err = "Email or Password Invalid";
        }
    }
?>
<body>
    <header>
        <?php
            include("include/header.php")
        ?>
    </header>

    <main class="login-view">
        <br>
        <div class="container">
            <div class="w3layouts_header">
				<p><span><i class="fa fa-user-o" aria-hidden="true"></i></span></p>
				<h5>Login</h5>
			</div>
            <div class="w3layouts_skills_grids agileinfo_mail_grids center">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div style="display: block !important; margin: 2mm auto !important">
                        <span class="input input--chisato" style="margin-left: 17.5% !important;">
                            <input class="input__field input__field--chisato" name="email" type="email" placeholder="" required="true" value="<?php echo $emailVal;?>"/>
                            <label class="input__label input__label--chisato" for="email">
                                <span class="input__label-content input__label-content--chisato" data-content="exam@ple.com">Email Address</span>
                            </label>
                        </span>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="password" type="password" placeholder="" value="<?php echo $passwordVal;?>" />
                            <label class="input__label input__label--chisato" for="password">
                                <span class="input__label-content input__label-content--chisato" data-content="*******">Password</span>
                            </label>
                        </span>
                        
                    </div>
                    <span class="input input--chisato" class="input input--chisato" style="margin-left: 17.5% !important;">
                        <span class="error"><?php echo $err;?></span>
                        <input type="submit" value="Login" name="submit"><a style="margin-left: 2mm !important;" href="register.php">Don't Have Account?</a>
                    </span>
                </form>
            </div>
        </div>
        
    </main>
    <br><br>

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

    <?php
        include("include/footer.php");
    ?>
</body>
</html>