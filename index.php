<html> 
<head>
	 <title>Resume Website</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
 <body>
<!--  <h1>My Example</h1>
 <?php
//your PHP code goes here
?>
 <b>Here is some more HTML</b>
 <?php
 //more PHP code
 ?> -->

 <!-- Header Section -->
 <section id="header">
 	<div class="container text-center">
 		<div class="user-box">
 			<img src="jcaalogo.png">
 			<h1>Khadejah Hylton</h1>
 			<p>Software Engineer</p>
 		</div>
 	</div>

 	<div class="scroll-btn">
 		<div class="scroll-bar"><a href=""><span></span></a></div>
 	</div>
 </section>
 <!-- User Info Section -->
 <section id="user-info">
 	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT ME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">RESUME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SERVICES</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>
 </section>

 
 </body>


<?php

echo "My name is Khadejah Hylton v2";
echo"<br>";
echo "Boom!! We are Live!!";


echo "If you view the page source \r\n you will find a newline in this string.";
echo "<br>";
echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");
?>
