<?php

	session_start();
	
	$conn = mysql_connect("localhost", "root", "") or  die("Could not connect: " .mysql_error());  
	mysql_select_db("vu");
	
	if(!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if(isset($_POST['submit']))
	{
		$id = $_POST['id'];
		$password = $_POST['password'];
		
		$id = mysql_real_escape_string($id);
		$password = mysql_real_escape_string($password);
		
		$sql = mysql_query("SELECT * FROM users WHERE id = '$id' AND password = '$password'") or die("Failed to query database " .mysql_error());
		
		$row = mysql_fetch_array($sql);
		
		if($row['id'] == $id && $row['password'] == $password)
		{
			$_SESSION['id']=$_POST['id'];
			
			/*if($id != "1000000001" && $password != "admin102030")
			{
				header("location: after_login.php");
				exit;
			}*/
			
			//else
			{
				header("location: after_login.php");
			}
		}
		
		else
		{
			header("location: login_form.php? msg=0");
			exit;
		}
	}
	
	mysqli_close($conn);
?>