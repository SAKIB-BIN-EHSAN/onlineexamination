<?php  

	session_start();    
	
	$id=$_SESSION['id'];

	if(!$_SESSION['id'])  
	{  
		header("Location: home.php");    //redirect to main home page to secure the welcome page without login access.  
	}  
?>


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
				<li> <a href="home_after_login.php">Home</a> </li>
				<li> <a id="active" href="about_after_login.php">About</a> </li>
		
		<?php
				if($id != "1000000001")
				{
		?>			
					<li> <a href="questions.php">Exam</a> </li>
					<li> <a href="profile.php">Result</a> </li>
					<li style="border-right:2px solid white;float:right"> <a href="logout.php">Logout</a> </li>
					<li style="border-left:2px solid red;border-right:2px solid red;float:right;"> <a href="info.php"><?php echo $id; ?> </a></li>
		<?php	
				}
				else if($id == "1000000001")
				{
		?>
					<li> <a href="questions.php">Semesters</a> </li>
					<li style="border-left:2px solid red;border-right:2px solid white;float:right"> <a href="logout.php">Logout</a> </li>
		<?php
				}
		?> 
			</ul>
		</div>
		
		<div class="contentsection template clear">
			<div class="aboutsection clear">
				<h2>About the System</h2>
				</br>
				<img style="margin-right:50px; margin-left:100px;" src="images/e-exam.gif" alt="Online Quiz Test"/>
				<img src="images/mcq.jpg" alt="MCQ"/>
				</br>
				</br>
				<p>
					MCQ tests are strong indicator of someone's skill. Here <a style="color:red"><b>Online Quiz Test</b></a> gives you the chance to test your skill.
					You can compete with other user and get your place in ranking. You can even improve your knowledge knowing the answers and try it another time. 
					Have a good exam. 
				<img style="margin-left:450px;width:42px;height:42px;" src="images/smile.png" alt="Smiley face"/>
				</p>
				</br>
				<img style="margin-left:23px;margin-right:15px;"src="images/mcqquiz.png" alt="E-Examination"/>
				<img src="images/answersheet.jpg" alt="MCQ"/>
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