<?php  

	session_start();  
	
	$id=$_SESSION['id'];

	if(!$_SESSION['id'])  
	{  
		header("Location: home.php");
	}	  
	
	if(isset($_POST['submit']))
	{
		header("location: profile.php");
		exit;
	}
	
	else 
	{
		header("location: after_login.php");
		exit;
	}
?>

