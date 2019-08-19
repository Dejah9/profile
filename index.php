<html> 
<head>
	 <title>Resume Website</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
 			<img src="kabrina.jpg">
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
 	<div class="nav-bar">
 	<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#">Navbar<img src="smn.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon"></span> -->
<i class="fas fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
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
</div>

<!-- ABOUT -->
<div class="about container" id="about">
	<div class="row">
		<div class="col-md-6 text-center">
			<img src="kabrina.jpg" class="profile-img">
		</div>
		<div class="col-md-6">
			<h3>WHO AM I?</h3>
			<P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</P>
			<div class="skills-bar">
				
				<p>Adobe Photoshop</p>
				<div class="progress">
					<div class="progress-bar" style="width: 80% "> 80%</div>
				</div>

				<p>Adobe Photoshop</p>
				<div class="progress">
					<div class="progress-bar" style="width: 80% "> 80%</div>
				</div>

				<p>UI Design</p>
				<div class="progress">
					<div class="progress-bar" style="width: 80% "> 80%</div>
				</div>

				<p>Wordpress</p>
				<div class="progress">
					<div class="progress-bar" style="width: 80% "> 80%</div>
				</div>

				<p>Graphics Design</p>
				<div class="progress">
					<div class="progress-bar" style="width: 80% "> 80%</div>
				</div>
			</div>
			</div>
			
		</div>
	</div>
	
</div>

<!-- Resume -->
<div class="resume" id="resume">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>My Experiences</h3>
				<ul class="timeline">
					<li>
						<h4>2019 - Systems Analyst</h4>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>
							<b>Company</b> - JCAA
							<b>Duration</b> - 2 years
							<b>Location</b> - Kingston, Jamaica
						</p>
					</li>
					<li>
						<h4>2018 - Systems Analyst</h4>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>
							<b>Company</b> - JCAA
							<b>Duration</b> - 2 years
							<b>Location</b> - Kingston, Jamaica
						</p>
					</li>
					<li>
						<h4>2017 - Systems Analyst</h4>
						<p>
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>
							<b>Company</b> - JCAA
							<b>Duration</b> - 2 years
							<b>Location</b> - Kingston, Jamaica
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
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
