<?php
  
	session_start();  
	
	$id = $_SESSION['id'];
	$message = "sem_1";
	
	if(!$_SESSION['id'])  
	{  
		header("Location: home.php");  
	}

	if(isset($_GET['msgq']))
	{
		$message = $_GET['msgq'];
	}
?>

<!DOCTYPE html>
<html>
	<head>
			<title> My website</title>
			<meta charset = "utf-8">
			<link rel="stylesheet" href="style.css">
			<link rel="stylesheet" href="admin_asset/bootstrap/css/bootstrap.min.css" />
			<script src="admin_asset/bootstrap/js/bootstrap.min.js" /> </script>
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
			<div class="afterreg clear">
			
			<?php
			
				$coni = mysqli_connect("localhost" , "root" , "" , "vu")  or  die("Connection failed: ".mysqli_connect_error());
				$con = mysql_connect("localhost", "root", "") or  die("Could not connect: " . mysql_error());  
				mysql_select_db("vu");
				
				//$result = mysql_query("Select * from &message");	
				$result = mysql_query("Select * from courses");		// change
				$n = mysql_num_rows($result);
				
				for($i=0;$i<$n;$i++)
				{
					$row = mysql_fetch_array($result);
					
					if($id != "1000000001")
					{
			?>		
			<?php
						if($message == $row['semester'])		// change
						{
			?>
							<h2>  <a href="test.php?msgq=<?php echo $row['course_no']; ?>"> <?php echo $row['course_no']; ?>  </a> </h2>
			<?php
						}
					}
					
					else if($id == "1000000001")
					{
			?>			
			<?php	
						if($message == $row['semester'])			// change
						{
			?>				
							<h2> <a href="question_upload.php?msgq=<?php echo $row['course_no']; ?>"> <?php echo $row['course_no']; ?> </a> </h2>
			<?php
						}
			
						/*$course = $row['course_no'];
						
						$sql = "CREATE TABLE IF NOT EXISTS $course(q_no INT PRIMARY KEY,q TEXT(1000) NOT NULL,o_1 TEXT(500) NOT NULL,o_2 TEXT(500) NOT NULL,o_3 TEXT(500) NOT NULL,o_4 TEXT(500) NOT NULL,r TEXT(500) NOT NULL)";
						
						if(mysqli_query($coni, $sql)) 
						{
							//echo "Create or replace view user created successfully."."<br>";
						} 
						else 
						{
							echo "unsuccessful view submission" . mysqli_error($coni);
						}*/
					}
				}
				
				mysql_close($con);
				mysqli_close($coni);
				
				if($id == "1000000001")
				{
			?>		
					<br><br>
					
					<!--<div id="page-wrap" style="border:0px solid white">-->
						<!--<div id="wrap">-->
							<!--<div class="container">-->
								<!--<div class="row">-->
 
									<form class="form-horizontal" action="course_csv_import.php?msgq=<?php echo $message; ?>" method="post" name="upload_excel" enctype="multipart/form-data">
										<!--<fieldset style="border:0px solid white">-->
        
											<!-- File Button -->
											<div class="form-group">
												<label class="col-md-4 control-label" for="filebutton">Select Course File (In CSV Format) </label>
												<div class="col-md-4">
													<input type="file" name="file" required autocomplete="off" id="file" class="input-large">
												</div>
											</div>
 
											<!-- Button -->
											<div class="form-group">
												<label class="col-md-4 control-label" for="singlebutton">Update Course Info</label>
												<div class="col-md-4">
													<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Update</button>
												</div>
											</div>
 
										<!--</fieldset>-->
									</form>
 
								<!--</div>-->
							<!--</div>-->
						<!--</div>-->
					<!--</div>-->
			<?php	
				}
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