<?php

?>
<!DOCTYPE html>
<html lang="en">
<?php
    include("include/head.php")
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
                <form action="" method="post">
                    <div style="display: block !important; margin: 2mm auto !important">
                        <span class="input input--chisato" style="margin-left: 17.5% !important;">
                            <input class="input__field input__field--chisato" name="email" type="email" placeholder="" required="true" />
                            <label class="input__label input__label--chisato" for="email">
                                <span class="input__label-content input__label-content--chisato" data-content="exam@ple.com">Email Address</span>
                            </label>
                        </span>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="password" type="password" placeholder="" />
                            <label class="input__label input__label--chisato" for="password">
                                <span class="input__label-content input__label-content--chisato" data-content="*******">Password</span>
                            </label>
                        </span>
                        
                    </div>
                    <span class="input input--chisato" class="input input--chisato" style="margin-left: 17.5% !important;">
                        <input type="submit" value="Login"><a style="margin-left: 2mm !important;" href="register.php">Don't Have Account?</a>
                    </span>
                </form>
            </div>
        </div>
        
    </main>
    <br><br>

    <?php
        include("include/footer.php");
    ?>
</body>
</html>