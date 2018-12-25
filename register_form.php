<?php

	session_start();
	$_SESSION['id']="";
	
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
				<li> <a href="home.php">Home</a> </li>
				<li> <a href="about.php">About</a> </li>
				<li style="border-right:2px solid white;float:right"> <a href="login_form.php">Login</a> </li>
				<li style="border-left:2px solid red;border-right:2px solid red;float:right;"> <a id="active" href="register_form.php">Register</a> </li>
			</ul>
		</div>
		
		<div class="contentsection template clear">
			<div class="reg clear">
				<h2> Register Here !!!! </h2>
				
				<?php
					if(isset($_GET['msgr']))
					{
						$message = $_GET['msgr'];
						if($message == 0)
						{
							?>
							<h3 style = "color:red; text-align:center;">Sorry your ID is already been registered. Try with another id.</h3>
							<br><br>
							<?php		
						}
							if($message == 1)
							{
								?>
								<h3 style = "color:red; text-align:center;">Sorry !!! There is a problem in connection.Try again.</h3>
								<br><br><br>
								<?php		
							}
						}
				?>
		
				<form style="margin-left:300px; margin-right:auto;width:900px;" action="register.php" method="post">
					<table>
						<tr>
							<td>Your Username:</td>
							<td><input type="text" name="username" placeholder="Enter your name"></td>
						</tr>
						
						<tr>
							<td> Your UserId: </td>
							<td> <input type="text" name="id" placeholder="Enter your id"> </td>
						</tr>
						
						<tr>
							<td> Your Password: </td>
							<td> <input type="password" name="password" placeholder="Enter your password"> </td>
						</tr>
						
						<tr>
							<td> Your Semester: </td>
							<td> 
								<input type="radio" name="semester" value = "First" required> First 
								<input type="radio" name="semester" value = "Second" required> Second 
								<input type="radio" name="semester" value = "Third" required> Third
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td> 
								<input type="radio" name="semester" value = "Fourth" required> Fourth  
								<input type="radio" name="semester" value = "Fifth" required> Fifth 
								<input type="radio" name="semester" value = "sixth" required> Sixth
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td> 
								<input type="radio" name="semester" value = "Seventh" required> Seventh  
								<input type="radio" name="semester" value = "Eigth" required> Eigth 
								<input type="radio" name="semester" value = "Nineth" required> Nineth
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td> 
								<input type="radio" name="semester" value = "Tenth" required> Tenth  
								<input type="radio" name="semester" value = "Eleventh" required> Eleventh 
								<input type="radio" name="semester" value = "Twelve" required> Twelve
							</td>
						</tr>
						
						<tr>
							<td> Your Email Address: </td>
							<td> <input type="email" name="email" placeholder="Enter your email" required> </td>
						</tr>
						
						<tr>
							<td> Your Phone: </td>
							<td> <input type="text" name="phone" placeholder="Enter your phone number"> </td>
						</tr>
						
						<tr>
							<td></td>
							<td> <input type="submit" name="submit" value="Submit"> </td>
						</tr>
					</table>
				</form>
				
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