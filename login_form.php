<?php  
	
	session_start(); //session starts here  
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
				<li style="border-right:2px solid white;float:right"> <a id="active" href="login_form.php">Login</a> </li>
				<li style="border-left:2px solid red;border-right:2px solid red;float:right;"> <a href="register_form.php">Register</a> </li>
			</ul>
		</div>
		
		<div class="contentsection template clear">
			<div class="reg clear">
				<h2> Login Here !!!! </h2>
				
				<?php
					if(isset($_GET['msg']))
					{
						$message = $_GET['msg'];
						if($message == 0)
						{
							?>
							<h3 style = "color:red; text-align:center;">Sorry your ID or Password is wrong. Try Again.</h3>
							<br><br>
							<?php		
						}
					}
				?>
				
				<form style="margin-left:330px; margin-right:auto;width:900px;" action="login.php" method="post">
					<table>						
						<tr>
							<td> Your UserId: </td>
							<td> <input type="text" name="id" placeholder="Enter your id"> </td>
						</tr>
						
						<tr>
							<td> Your Password: </td>
							<td> <input type="password" name="password" placeholder="Enter your password"> </td>
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
	</body>
</html>