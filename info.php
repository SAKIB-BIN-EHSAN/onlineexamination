<?php  

	session_start();  
	$id = $_SESSION['id'];
	
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
			<link rel="stylesheet" href="table.css">
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
				<li> <a href="questions.php">Exam</a> </li>
				<li> <a href="profile.php">Result</a> </li>
				<li style="border-right:2px solid white;float:right"> <a href="logout.php">Logout</a> </li>
				<li style="border-left:2px solid red;border-right:2px solid red;float:right;"> <a href="info.php"><?php echo $id; ?> </a></li>   
			</ul>
		</div>
		
		<div class="contentsection template clear">
			<div class = "profilesection template clear">
			<?php
	
				$con = mysql_connect("localhost", "root", "") or  die("Could not connect: " . mysql_error());  
				mysql_select_db("vu");
				
				if(isset($_GET['msg']))
				{
					$message = $_GET['msg'];
					if($message == 0)
					{
		?>
						<h3 style = "color:green; text-align:center;margin-top:40px;">Profile Updated Successfully.</h3>
		<?php		
					}
				}
		?>
				<h1 style="text-align:center;margin-top:50px;"><a href="profile_edit_form.php">Edit Profile</a></h1>
				</br></br>
		<?php
				//if($id != "1000000001")
				{
					$result = mysql_query("SELECT * FROM users where id = '{$id}'");
					$row = mysql_fetch_array($result);
				
			?>
					</br></br>

					<h2 style = "background-color:#eff; color:black; text-align:center;">Profile Info</h2>
					<table class="center1">
				
						<tr >
							<td id="td01">Username</td>
							<td id="td01"><?php echo $row['username']; ?></td>
						</tr>
						<tr>
							<td>User id</td>
							<td><?php echo $row['id']; ?></td>
						</tr>
						<tr>
							<td>Semester</td>
							<td><?php echo $row['semester']; ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $row['email']; ?></td>
						</tr>
						<tr>
							<td>Phone No</td>
							<td><?php echo $row['phone']; ?></td>
						</tr>
						<tr>
							<td>Registration Date</td>
							<td><?php echo $row['reg_date']; ?></td>
						</tr>
						<tr>
							<td>No of exam</td>
							<td><?php echo $row['exam']; ?></td>
						</tr>
					
					</table>
					</br> </br> </br>
			<?php
				}
				
				mysql_close($con);
			?>
				
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