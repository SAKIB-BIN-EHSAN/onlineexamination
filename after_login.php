<?php  
	
	session_start();  

	if(!$_SESSION['id'])  
	{  
		header("Location: login_form.php");    //redirect to login page to secure the welcome page without login access.  
	}  
	
	$id = $_SESSION['id'];	  // Get the id of the logged in user
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
			<div class="afterreg">
				<br> <br> 
				
				<h3> <?php echo "Welcome ID ".$id.".You are now logged in!!!"?> </h3>
				<br> <br> <br>
				
				<img src="images/smile.png" alt="Smiley face"/>
				
				<form action="questions.php" method="post">
					<table>
			<?php		
						if($id != "1000000001")
						{
			?>				
							<tr>
								<td></td>
								<td> <input style="margin-left:300px;width:300px;"type="submit" name="submit" value="Click Here To Start The test"> </td>
							</tr>
			<?php
						}
						else 
						{
			?>
							<tr>
								<td></td>
								<td> <input style="margin-left:300px;width:300px;"type="submit" name="submit" value="Click Here To edit the questions"> </td>
							</tr>
			<?php
						}
			?>			
						
					</table>
				</form>
				
				<form action="choose.php" method="post">
					<table>				
						<tr>
							<td></td>
							<td> <input style="margin-left:300px;width:300px;"type="submit" name="submit" value="Click Here To See Result"> </td>
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