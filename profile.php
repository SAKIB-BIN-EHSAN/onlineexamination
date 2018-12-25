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
			
			
			<script type="text/javascript" src="js/jquery-git.js"></script>
			<script type="text/javascript" src="js/jspdf.min.js"></script>
    
			<script type='text/javascript'>
				$(window).on('load', function() {
					var doc = new jsPDF();
					var specialElementHandlers = {
					'#editor': function (element, renderer) {
					return true;
					}
				};

				$('#cmd').click(function () {
				doc.fromHTML($('#content').html(), 15, 15, {
				'width': 170,
				'elementHandlers': specialElementHandlers
				});
			doc.save('result.pdf');
			});
		});
</script>
			
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
			<div class = "profilesection template clear">
			<?php
	
				$con = mysql_connect("localhost", "root", "") or  die("Could not connect: " . mysql_error());  
				mysql_select_db("vu");
				
				if($id == "1000000001")
				{
					$result1 = mysql_query("SELECT * FROM users");
					$userm = mysql_num_rows($result1);
					
			?>
					<h2 style = "background-color:#eff; color:black; text-align:center;">All users submission List</h2>
					<table class="center"> 
						<tr>
							<th>User Id</th>
							<th>Exam No</th>
							<th>Course No</th>
					    	<th>Correctly Answered</th>
							<th>Wrong Answered</th>
							<th>Not Answered</th>
							<th>Obtain Marks</th>
							<th>Position</th>
							<th>Submission Date</th>
				  		</tr>
			<?php	
					$result = mysql_query("SELECT * FROM submission");
					$subn = mysql_num_rows($result);
				
					
					if($subn != 0 && $userm != 0)
					{	
						for($i=0;$i<$userm;$i++)
						{
							$first = 0;
							$row1 = mysql_fetch_array($result1);
							$result = mysql_query("SELECT * FROM submission");
							$res1 = mysql_query("SELECT * FROM ranklist");			// change
							
							if($row1['id'] == "1000000001")
								continue;
							
							for($j=0;$j<$subn;$j++)
							{
								$row = mysql_fetch_array($result);
								$rankrow = mysql_fetch_array($res1);
								
								if($row1['id'] == $row['id'])
								{
			?>					
									<tr>
			<?php						if($first == 0)
										{
			?>
											<td id="td01"> <a style="color:black;"href="profile2.php?use2=<?php echo $row['id']; ?>"> <?php echo $row['id']; ?> </a> </td>
			<?php
											$first = 1;
										}
										else if($first == 1)
										{
			?>
											<td id="td01"> <?php echo " " ?></a> </td>
			<?php
										}
			?>
					
										<td id="td01"> <?php echo $row['exam_no']; ?></td>
										<td id="td01"> <?php echo $row['course_no']; ?></td>
										<td id="td01"> <?php echo $row['correct']; ?></td>
										<td id="td01"> <?php echo $row['wrong']; ?></td>
										<td id="td01"> <?php echo $row['not_answered']; ?></td>
										<td id="td01"> <?php echo $row['obtain_marks']; ?></td>
										<td id="td01"> <?php echo $rankrow['rank']; ?></td>
										<td id="td01"> <?php echo $row['sub_date']; ?></td>
									</tr>
			<?php				
								}
							}
						}
					}
					
					else
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
							<td>x</td>
						</tr>
			<?php
					}
			?>
					</table>
					</br> </br></br>
			<?php	
				}
				
				else if($id != "1000000001")
				{									
			?>
					<br><br><br>
					
					<h2 style = "background-color:#eff; color:black; text-align:center;">Submission List</h2>
					<table class="center">
			  			<tr>
				    		<th>Exam Id</th>
							<th>Course No</th>
						    <th>Correctly Answered</th>
							<th>Wrong Answered</th>
							<th>Not Answered</th>
							<th> Obtain Marks</th>
							<th>Position</th>
							<th>Submission Date</th>
					  	</tr>
				
			<?php
						
						$result = mysql_query("SELECT * FROM submission where id = '{$id}'");
						$n = mysql_num_rows($result);
						$res1 = mysql_query("SELECT * FROM ranklist WHERE id = '{$id}'");
					
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
								$rankrow = mysql_fetch_array($res1);
						
								if($row['id'] == $id && $rankrow['id'] == $id)
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
									<td>x</td>
								</tr>
			<?php
							}
						} 
			?>
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