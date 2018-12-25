<?php  

	session_start();  
	$id = $_SESSION['id'];
	$id2 = "none";
	
	if(!$_SESSION['id'])  
	{  
		header("Location: home.php"); 
	}
	
	if(isset($_GET['use2']))
	{
		$id2 = $_GET['use2'];
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
				<li> <a href="questions.php">Semesters</a> </li>
				<li style="border-left:2px solid red;border-right:2px solid white;float:right"> <a href="logout.php">Logout</a> </li>
			</ul>
		</div>
		
		<div class="contentsection template clear">
			<div class = "profilesection template clear">
			<?php
	
				$con = mysql_connect("localhost", "root", "") or  die("Could not connect: " . mysql_error());  
				mysql_select_db("vu");
				
				$result = mysql_query("SELECT * FROM users where id = '{$id2}'");
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
				
				<h2 style = "background-color:#eff; color:black; text-align:center;">Submission List</h2>
				<table class="center">
			  		<tr>
				    	<th>Exam Id</th>
						<th>Course No</th>
					    <th>Correctly Answered</th>
						<th>Wrong Answered</th>
						<th>Not Answered</th>
						<th>Obtain Marks</th>
						<th>Position</th>
						<th>Submission Date</th>
				  	</tr>
				
					<?php
						
						$result = mysql_query("SELECT * FROM submission where id = '{$id2}'");
						$n = mysql_num_rows($result);


						//$res = $result = mysql_query("SELECT * FROM ranklist where id = '{$id2}'");
						$res = mysql_query("SELECT * FROM ranklist where id = '{$id2}'");
						$rankm = mysql_num_rows($res);
					
						if($n == 0)
						{
					?>
							<tr>
								<td>x</td>
								<td>x</td>
								<td>x</td>
								<td>x</td>
								<td>x</td>
								<td>x</td>
								<td>x</td>
								<td>x</td>
							</tr>
					<?php
						}
						else 
						{
							$true = 0;
							for($i=0;$i<$n;$i++)
							{
								$row = mysql_fetch_array($result);
								$rankrow = mysql_fetch_array($res);
						
								if($row['id'] == $id2)
								{
					?>
									<tr>
										<td><?php echo $row['exam_no']; ?></td>
										<td><?php echo $row['course_no']; ?></td>
										<td><?php echo $row['correct']; ?></td>
										<td><?php echo $row['wrong']; ?></td>
										<td><?php echo $row['not_answered']; ?></td>
										<td><?php echo $row['obtain_marks']; ?></td>
										<td><?php echo $rankrow['rank']; ?></td>
										<td><?php echo $row['sub_date']; ?></td>
									</tr>
					<?php
									$true = 1;
								}
							}
							
							if($true == 0)
							{
					?>
								<tr>
									<td>x</td>
									<td>x</td>
									<td>x</td>
									<td>x</td>
									<td>x</td>
									<td>x</td>
									<td>x</td>
									<td>x</td>
								</tr>
					<?php
							}
						}
						mysql_close($con); 
					?>
				</table>
				</br> </br> </br>
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