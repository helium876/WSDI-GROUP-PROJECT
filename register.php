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

    <main>
        <br>
        <div class="container">
            <div class="w3layouts_header">
				<p><span><i class="fa fa-user-o" aria-hidden="true"></i></span></p>
				<h5>Register</h5>
			</div>
            <div class="w3layouts_skills_grids agileinfo_mail_grids">
                <form action="" method="post">
                    <div>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="fname" type="text" placeholder="" required="true" />
                            <label class="input__label input__label--chisato" for="fname">
                                <span class="input__label-content input__label-content--chisato" data-content="John">First Name <em style="color: red">*</em></span>
                            </label>
                        </span>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="mname" type="text" placeholder="" />
                            <label class="input__label input__label--chisato" for="mname">
                                <span class="input__label-content input__label-content--chisato" data-content="Jones">Middle Name</span>
                            </label>
                        </span>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="lname" type="text" placeholder="" required="true" />
                            <label class="input__label input__label--chisato" for="lname">
                                <span class="input__label-content input__label-content--chisato" data-content="Doe">Last Name <em style="color: red">*</em></span>
                            </label>
                        </span>
                    </div>
                    <div>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="tel1" type="text" placeholder="" required="true" />
                            <label class="input__label input__label--chisato" for="tel1">
                                <span class="input__label-content input__label-content--chisato" data-content="x-xxx-xxx-xxxx">Telephone 1 <em style="color: red">*</em></span>
                            </label>
                        </span>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="tel2" type="text" placeholder="" />
                            <label class="input__label input__label--chisato" for="tel2">
                                <span class="input__label-content input__label-content--chisato" data-content="x-xxx-xxx-xxxx">Telephone 2</span>
                            </label>
                        </span>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="trn" type="text" placeholder="" />
                            <label class="input__label input__label--chisato" for="trn">
                                <span class="input__label-content input__label-content--chisato" data-content="xxx-xxx-xxx">Tax Registration Number</span>
                            </label>
                        </span>
                    </div>
                    <div>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="email" type="email" placeholder="" required="true" />
                            <label class="input__label input__label--chisato" for="email">
                                <span class="input__label-content input__label-content--chisato" data-content="exam@ple.com">Email Address <em style="color: red">*</em></span>
                            </label>
                        </span>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="password" type="password" placeholder="" required="true" />
                            <label class="input__label input__label--chisato" for="password">
                                <span class="input__label-content input__label-content--chisato" data-content="********">Password <em style="color: red">*</em></span>
                            </label>
                        </span>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" name="rpassword" type="password" placeholder="" required="true"/>
                            <label class="input__label input__label--chisato" for="rpassword">
                                <span class="input__label-content input__label-content--chisato" data-content="********">Re-type Password <em style="color: red">*</em></span>
                            </label>
                        </span>
                    </div>
                    <span class="input input--chisato">
                        <input type="submit" value="Register"> <a href="login.php" style="margin-left: 2mm !important;">Have Account?</a>
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