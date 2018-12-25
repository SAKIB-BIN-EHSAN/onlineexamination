<?php

	session_start();
	
	$id=$_SESSION['id'];

	if(!$_SESSION['id'])  
	{  
		header("Location: home.php");
	}
	
	$coni = mysqli_connect("localhost" , "root" , "" , "vu")  or  die("Connection failed: ".mysqli_connect_error());
	$con = mysql_connect("localhost", "root", "") or  die("Could not connect: " . mysql_error());  
	mysql_select_db("vu");
	
	if(isset($_POST['submit']))
	{
		$newpassword = mysql_real_escape_string($_POST['newpassword']);
		$oldpassword = mysql_real_escape_string($_POST['oldpassword']);
		$semester = mysql_real_escape_string($_POST['semester']);
		$email = mysql_real_escape_string($_POST['email']);
		$phone = mysql_real_escape_string($_POST['phone']);
		
		$result = mysql_query("SELECT * FROM users WHERE id = '$id'");
		$row = mysql_fetch_array($result);
		
		if($oldpassword == $row['password'])
		{
			$sql = "UPDATE users SET password='{$newpassword}', semester='{$semester}', email='{$email}', phone='{$phone}' WHERE id='{$id}'";
		
			if(mysqli_query($coni, $sql))
			{
				header("location: info.php?msg=0");
				exit;
			}
			else 
			{
				echo "unsuccessful data insertion" . mysqli_error($con);
				header("location: profile_edit_form.php?msgq=0");
				exit;
			}
		}
		else
		{
			header("location: profile_edit_form.php?msgq=0");
			exit;
		}
	}
	mysql_close($con); 
	mysqli_close($coni); 
?>