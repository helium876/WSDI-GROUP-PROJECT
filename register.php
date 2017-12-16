<!DOCTYPE html>
<html lang="en">

<head>
<title>MI CASA</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">


<link rel="stylesheet" type="text/css" href="engine0/style.css" />

<script type="text/javascript" src="engine0/jquery.js"></script>

<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<style type="text/css">.bg{behavior:url("js/PIE.htc");}</style>

	

	



<![endif]-->
</head>
<body id="page1">
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <h1><a href="index.html" id="logo"></a></h1>
	  <form align="right" method="post" action="index.php"><br/>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password"><br/>
            <input type="submit" class="button" value="Login">   <a href="register.php" align="right" class="button">Register</a> 
        </form><br>
      
      <nav>
        <ul id="menu">
          <li ><a href="index.html">Home Page</a></li>
          <li><a href="account.php">Edit Account </a></li>
          <li id="menu_active"><a href="register.php">Registration </a></li>
          <li><a href="database.php">Database </a></li>
          <li><a href="contacts.html">contact us</a></li>
         
        </ul>
      </nav>
    </header>
    <!-- / header -->
  </div>
</div>
<!-- content -->
<div class="body2">
  <div class="main">
    <section id="content">
      <div class="wrapper">
        <article class="col1">
          <div class="pad2">
            <h2 class="pad_bot1 pad_top1">Create Account</h2>
            <form id="ContactForm" action="#">
              <div>
                <div  class="wrapper"> <span>First Name<em style="color: red;">*</em>&nbsp;:</span>
                  <input type="text" class="input" name="fname">
                </div>
                <div  class="wrapper"> <span>Middle Name:</span>
                  <input type="text" class="input" name="mname">
                </div>
                <div  class="wrapper"> <span>Last Name<em style="color: red;">*</em>&nbsp;:</span>
                  <input type="text" class="input" name="lname">
                </div>
                <div  class="wrapper"> <span>Telephone<em style="color: red;">*</em>&nbsp;:</span>
                  <input type="text" class="input" name="tel1">
                </div>
                <div  class="wrapper"> <span>Telephone 2:</span>
                  <input type="text" class="input" name="tel2">
                </div>
                <div  class="wrapper"> <span>Your E-mail<em style="color: red;">*</em>&nbsp;:</span>
                  <input type="email" class="input" name="email">
                </div>
                <div  class="wrapper"> <span>TRN<em style="color: red;">*</em>&nbsp;:</span>
                  <input type="text" class="input" name="trn">
                </div>
                <div  class="wrapper"> <span>Password<em style="color: red;">*</em>&nbsp;:</span>
                  <input type="password" class="input" name="pword">
                </div>
				<div  class="wrapper"> <span>Retype Password<em style="color: red;">*</em>&nbsp;:</span>
                  <input type="password" class="input" name="rpword">
                </div>
                <span>&nbsp;</span> <button type="reset" class="button">Clear</button> <button href="#" class="button">Create</button> </div>
            </form>
          </div>
       
      </div
</div>

<!-- / content -->

    <!-- footer -->
    <footer> 
      </div><span class="call">For your design call: <span>1-876-477-2117</span></span> Copyright &copy; <a href="#">MI CASA 2017</a> All Rights Reserved<br>
      Design by <a target="_blank" href=""> Mikhail Gooden Helium</a>
      
    </footer>
    <!-- / footer -->
  </div>
</div>

</body>
</html>
