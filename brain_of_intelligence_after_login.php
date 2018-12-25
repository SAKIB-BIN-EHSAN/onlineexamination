<?php  

	session_start();    
	
	$id=$_SESSION['id'];

	if(!$_SESSION['id'])  
	{  
		header("Location: home.php"); 
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
				<li> <a id="active" href="home_after_login.php">Home</a> </li>
				<li> <a href="about_after_login.php">About</a> </li>
		
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
			<div class="syn clear">
				<h2>Brain of Intelligence: Quiz Competition-2017</h2>
				<img src="images/business-club-quiz-competition.jpg" alt="post image"/>
					<meta>
					<p style="padding-top:30px;">
						Varendra University Business Club arranged final round of “Brain of Intelligence: Quiz Competition-2017” dated on July 13, 2017 at Varendra University Talaimary-1 campus premises. 
						Three rounds were followed to complete the competition. The first round of this quiz competition was held on May 26, 2017 with 170 participants. The second round of this quiz competition was held on June 04, 2017 with 50 participants. 
						Finally seven participants were selected to participate in the final round. Sariful Islam student of 10th semester becomes the champion of Brain of Intelligence: Quiz Competition-2017. 
						Faisal Ahmed Siam student of 7th semester becomes the first runner up and Ashraful Islam Sweet student of MBA Program becomes the second runner up.
					</p>
					<p>
						In the prize giving ceremony Professor Dr. Nurul H. Choudhury, Pro Vice Chancellor of Varendra University was present as chief guest, Prof. Dr. Shaikh Shamsul Arafin, Head, Department of Business Administration was chaired, 
						and all faculty members of Department of Business Administration, Varendra University were present in that occasion.
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