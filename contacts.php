<?php
?>
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
          <li ><a href="index.php">Home Page</a></li>
          <li><a href="account.php">Edit Account </a></li>
          <li><a href="register.php">Registration </a></li>
          <li><a href="database.php">Database </a></li>
          <li id="menu_active"><a href="contacts.php">contact us</a></li>
         
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
            <h2 class="pad_bot1 pad_top1">Contact Form</h2>
            <form id="ContactForm" action="#">
              <div>
                <div  class="wrapper"> <span>Your Name:</span>
                  <input type="text" class="input" >
                </div>
                <div  class="wrapper"> <span>Your E-mail:</span>
                  <input type="text" class="input" >
                </div>
                <div  class="textarea_box"> <span>Your Message:</span>
                  <textarea name="textarea" cols="1" rows="1"></textarea>
                </div>
                <span>&nbsp;</span> <a href="#" class="button">Clear</a> <a href="#" class="button">Send</a> </div>
            </form>
          </div>
       
      </div>
      <div class="wrapper">
        <article class="col1">
          <div class="pad2">
            <h2 class="pad_bot1">Property info</h2>
            <p class="pad_bot1"><strong>Property, in the abstract, is what belongs to or with something, 
			whether as an attribute or as a component of said thing. In the context of this article, 
			it is one or more components (rather than attributes), whether physical or incorporeal, 
			of a person's estate; or so belonging to, as in being owned by, a person or jointly a group of people
			or a legal entity like a corporation or even a society. (With that meaning, the word property is uncountable
			and so is not used with an indefinite article or as a plural.) Depending on the nature of the property, 
			an owner of property has the right to consume, alter, share, redefine, rent, mortgage, pawn, sell, exchange, transfer, give away or destroy it.</div>
          <div class="pad_left1">
            <div class="wrapper pad_bot3">
              
        <article class="col2">
          <div class="pad1">
            <h3>MI CASA Contacts</h3>
            <div class="address"> 320 Old Hope Road,<br>
              Saint Andrew, Kingston 20.<br>
              <span> Freephone:<br>
              Telephone:<br>
              E-mail: </span> +1 876 559 6580<br>
              +1 876 603 6035<br>
              <a href="#">mail@MI CASA.org</a> </div>
            <h3 class="pad_top1">MI CASA MISSION</h3>
            <p>Providing a home for everyone, the rich, poor and less fortunate we consider all mi casa making homes a reality.</p>
             </div>
        </article>
      </div>
    </section>
  </div>
</div>
<!-- / content -->
<div class="body4">
  <div class="main">
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
