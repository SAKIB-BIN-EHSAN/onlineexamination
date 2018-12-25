<?php

	session_start();
	
	$conn = mysqli_connect("localhost","root","","vu");
	
	if(!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if(isset($_POST['submit']))
	{
		$username = mysql_real_escape_string($_POST['username']);
		$id = mysql_real_escape_string($_POST['id']);
		$password = mysql_real_escape_string($_POST['password']);
		$semester = mysql_real_escape_string($_POST['semester']);
		$email = mysql_real_escape_string($_POST['email']);
		$phone = mysql_real_escape_string($_POST['phone']);
		
		$coni = mysql_connect("localhost", "root", "") or  die("Could not connect: " .mysql_error());  
		mysql_select_db("vu");
		
		$result = mysql_query("SELECT * FROM users WHERE id = '$id'") or die("Failed to query register database " .mysql_error());;
		$row = mysql_fetch_array($result);
		
		if($row['id'] == $id)
		{
			header("location: register_form.php? msgr=0");
			exit;
		}

		else 
		{
			$sql = "INSERT INTO users(username , id , password , semester , email , phone , exam) VALUES ('$username' , '$id' , '$password' , '$semester' , '$email' , '$phone' , '0')";
		
			if(mysqli_query($conn , $sql))
			{
				$_SESSION['username']=$_POST['username'];
				$_SESSION['id']=$_POST['id'];
				header("location: after_reg.php");
				exit;
			}
		
			else
			{
				$_SESSION['username']="";
				$_SESSION['id']="";
				header("location: register_form.php? msgr=1");
				exit;
			}
		}
	}
	
	mysqli_close($conn);
?>