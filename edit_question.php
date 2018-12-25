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
				<li style="border-right:2px solid white;float:right"> <a href="logout.php">Logout</a> </li>
			</ul>
		</div>
		
		<div class="contentsection template clear">
			<div id="page-wrap">
			
		<?php
			
					$con = mysql_connect("localhost", "root", "") or  die("Could not connect: " . mysql_error());  
					mysql_select_db("vu");
					
					$id=$_GET['id'];
        
					$msg = 0;
			
					if(isset($_REQUEST['submit']))
					{
						$qr="UPDATE ques SET q='".$_POST["q"]."', o_1='".$_POST["o_1"]."', o_2='".$_POST["o_2"]."', o_3='".$_POST["o_3"]."', o_4='".$_POST["o_4"]."', r='".$_POST["r"]."' WHERE id='".$id."'";
		
						if(!mysql_query($qr))
						{
							die ("<div align='center' style='color:red; font-size:16px;'>An unexpected error occured while deleting the record, Please try again!</div>");
						}
						else
						{
							$msg="<div align='center' style='color:green; font-size:16px;'>Question Deleted Successfully!</div>";
						}
					}
		
					$query="SELECT * FROM ques WHERE id = '".$id."'";
					$resource=mysql_query($query);
					$result=mysql_fetch_array($resource);
					
					if(!$msg==0)
					{
						$se = $result['course_no'];
						$_SESSION['cour'] = $se;
						header("location: question_upload.php");
					}
	                    
					echo '<div align="center"><h4>Edit Question Details</h4></div>
						<form method="post" />					                      
		  		
		                    <strong>Question Title : </strong>
		                    <input class="form-control" name="q" type="text" value="'.$result['q'].'" required><br/>
		
		                    <strong>Option A : </strong>
		                    <input class="form-control" type="text" name="o_1" value="'.$result['o_1'].'" /><br/>
		
		                    <strong>Option B :</strong>:
		                    <input class="form-control" type="text" name="o_2" value="'.$result['o_2'].'" /><br/>
		
		                    <strong>Option C :</strong>
		                    <input class="form-control" type="text" name="o_3" value="'.$result['o_3'].'" /><br/>
								  
							<strong>Option D :</strong>
		                    <input class="form-control" type="text" name="o_4" value="'.$result['o_4'].'" /><br/>
								  
							<strong>Correct Answer :</strong>
		                    <input class="form-control" type="text" name="r" value="'.$result['r'].'" />
                              
							<div align="center">
                            <label>
                                <input type="submit" class="btn btn-info" name="submit" value="Submit" />
                                </label>
							</div>
						</form>
		                ';
			
				?>
				
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