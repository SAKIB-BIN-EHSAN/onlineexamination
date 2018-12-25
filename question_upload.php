<?php  

	session_start();  
	
	$id = $_SESSION['id'];
	$message = "CSE_112";
	
	if(!$_SESSION['id'])  
	{  
		header("Location: home.php");
	}

	if(isset($_GET['msgq']))
	{
		$message = $_GET['msgq'];
	}
	$msg = 0;

?>

<!DOCTYPE html>
<html>
	<head>
			<title> My website</title>
			<meta charset = "utf-8">			
			<link rel="stylesheet" href="style.css">
			<link rel="stylesheet" href="admin_asset/bootstrap/css/bootstrap.min.css" />
			<script src="admin_asset/bootstrap/js/bootstrap.min.js" /></script>
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
			<div id="page-wrap">
			
		<?php
				$con = mysql_connect("localhost", "root", "") or  die("Could not connect: " . mysql_error());  
				mysql_select_db("vu");
				$uri = $_SERVER['REQUEST_URI'];
					
				$qno = 0;
				
				
				if(!empty($_REQUEST["did"]))
				{
	                $did=$_REQUEST['did'];
					
                    if($did=='all')		
					{
						$qd="DELETE FROM ques WHERE course_no = '".$message."'";
					}
				    else
					{
				       $qd="DELETE FROM ques WHERE id='".$did."'";
					}
					   
		            if(!mysql_query($qd))
					{
						die ("<div align='center' style='color:red; font-size:16px;'>An unexpected error occured while deleting the record, Please try again!</div>");
					}
		            else
		            {
		               $msg="<div align='center' style='color:green; font-size:16px;'>Question Deleted Successfully!</div>";
					}
				}
					
				$result = mysql_query("Select * from ques");
				$n = mysql_num_rows($result);
					
				$question_remain = 0;
				for($i=0;$i<$n;$i++)
				{
					$row = mysql_fetch_array($result);
					if($row['course_no'] == $message)
						$question_remain++;
				}
				
				if($message == "computer_science_1")
				{
					$message = $_SESSION['cour'];
					echo "<div align='center' style='color:green; font-size:16px;'>Question Edited Successfully!</div>";
		?>
					<h1 style="margin-top:30px;"> <?php echo $message; ?> </h1> </br>
		<?php
				}
				else 
				{
		?>
					<h1> <?php echo $message; ?> : </h1> </br>
		<?php
				}
				
				if($question_remain != 0)
				{
		?>
					</br>
					<h1> MCQ Quiz :</h1>  </br>
		<?php
						
					echo '<div align="center"> <a href="'.$uri.'&did=all"><img src="images/deleteall.png" height="42px"></a> </div>';
					if($msg != '0')
					    echo $msg;
		?>
		<?php
				}
					
				$result = mysql_query("Select * from ques");
				$n = mysql_num_rows($result);
					
				for($i=0;$i<$n;$i++)
				{
					$row = mysql_fetch_array($result);
		?>	
					<p> 
		<?php
					if($row['course_no'] == $message)
					{
						$qno = $qno + 1;
						echo $qno;
						echo ". ";
						echo $row['q']." ";
						echo "<br><br>";
		?>
					</p>
				
						A) <?php echo $row['o_1']; ?>
						<br><br>
	
						B) <?php echo $row['o_2']; ?>
						<br><br>
	
						C) <?php echo $row['o_3']; ?>
						<br><br>
	
						D) <?php echo $row['o_4']; ?>
						<br><br>
	
						Answer: <?php echo $row['r']; ?>
						<br><br>
		<?php
						echo '<a href="/vuproject/edit_question.php?id='.$row["id"].'"><img src="images/edit.png" height="42px"></a> | <a href="'.$uri.'&did='.$row["id"].'"><img src="images/delete1.png" height="42px"></a>  <br><br>';
					}
				}
		?>
				
				</br>
				</br>
				</br>
				<!--<div id="wrap">-->
					<!--<div class="container">-->
						<!--<div class="row">-->
 
                <form class="form-horizontal" action="question_csv_import.php?msgq=<?php echo $message; ?>" method="post" name="upload_excel" enctype="multipart/form-data">
                    <!--<fieldset>-->
 
                        <!-- Form Name 
                        <legend><b>Upload New Question Set :</b></legend>
						-->
						
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select Question File (In CSV Format)</label>
                            <div class="col-md-4">
                                <input type="file" name="file" required autocomplete="off" id="file" class="input-large">
                            </div>
                        </div>
 
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Upload New Question Set</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
                            </div>
                        </div>
 
                    <!--</fieldset>-->
                </form>
 
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->	

		</div>
		<?php
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