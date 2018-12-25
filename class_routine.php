<!DOCTYPE html>
<html>
	<head>
			<title> My website</title>
			<meta charset = "utf-8">
			<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
		<div class="headersection templete clear"> 
			<div class="logo">
				<img src="images/logo.png" alt="Logo"/>
				<h2> Online Quiz Test</h2>
				<p style="color:blue; margin: 170px 0px 0px 300px;"> 
					<?php 
						date_default_timezone_set("Asia/Dhaka"); 
						echo "Server-time:  " .date("l");
						echo " " .date("Y-m-d h:i a");
					?> 
				</p>
			</div>
		</div>
	
		<div class="navsection template clear">
			<ul>
				<li> <a id="active" href="home.php">Home</a> </li>
				<li> <a href="about.php">About</a> </li>
				<li style="border-right:2px solid white;float:right"> <a href="login_form.php">Login</a> </li>
				<li style="border-left:2px solid red;border-right:2px solid red;float:right;"> <a href="register_form.php">Register</a> </li>
			</ul>
		</div>
		
		<div class="contentsection template clear">
			<div class="syn clear">
				<h2 style="padding-top:30px;">CSE CLASS ROUTINE FALL-2017</h2>
					<meta>
					<p style="padding-top:30px;padding-bottom:30px;">
						The class routine of all the semesters of cse department has been published on 14th September,2017.
					</p>
					<p style="padding-bottom:20px;">
						Any student can collect the routine from our website.
					</p>
					</meta>
				</div>				
			</div>
			
		</div>
		
		<div class="footersection template clear">
			<h2>CONTACT US</h2>
			<p> 529/1, Kazla, Motihar, Rajshahi </p>
			<p> +880721-751274,+880721-751459 </p>
			<p> info@vu.edu.bd </p>
			<p>facebook.com/vu.edu </p>
		</div>
</html>