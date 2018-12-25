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
				<li> <a href="home_after_login.php">Home</a> </li>
				<li> <a href="about_after_login.php">About</a> </li>
				<li style="border-right:2px solid white;float:right"> <a href="logout.php">Logout</a> </li>
				<li style="border-left:2px solid red;border-right:2px solid red;float:right;"> <a href="#"><?php echo $id; ?> </a></li>
			</ul>
		</div>
		
		<div class="contentsection template clear">
			<div class="semsection clear">
			
				<h1> Select Semester :</h1>
				
				</br>
				<h2> <a href="questions_2.php?msgq=sem_1">Semester 1</a></h2>
				<h2> <a href="questions_2.php?msgq=sem_2">Semester 2</a></h2>
				<h2> <a href="questions_2.php?msgq=sem_3">Semester 3</a></h2>
				<h2> <a href="questions_2.php?msgq=sem_4">Semester 4</a></h2>
				<h2> <a href="questions_2.php?msgq=sem_5">Semester 5</a></h2>
				<h2> <a href="questions_2.php?msgq=sem_6">Semester 6</a></h2>
				<h2> <a href="questions_2.php?msgq=sem_7">Semester 7</a></h2>
				<h2> <a href="questions_2.php?msgq=sem_8">Semester 8</a></h2>
				<h2> <a href="questions_2.php?msgq=sem_9">Semester 9</a></h2>
				<h2> <a href="questions_2.php?msgq=sem_10">Semester 10</a></h2>
				<h2> <a href="questions_2.php?msgq=sem_11">Semester 11</a></h2>
				<h2> <a href="questions_2.php?msgq=sem_12">Semester 12</a></h2>
				
				</br>
					
			</div>
		</div>
		
		<div class="footersection template clear">
			<h2>CONTACT US</h2>
			<p> 529/1, Kazla, Motihar, Rajshahi </p>
			<p> +880721-751274,+880721-751459 </p>
			<p> info@vu.edu.bd </p>
			<p>facebook.com/vu.edu </p>
		</div>
	</body>
</html>
	

