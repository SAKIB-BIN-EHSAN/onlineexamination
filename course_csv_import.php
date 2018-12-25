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

	$coni = mysqli_connect("localhost" , "root" , "" , "vu")  or  die("Connection failed: ".mysqli_connect_error()); 

	if(isset($_POST["Import"]))
	{
		$filename = $_FILES["file"]["tmp_name"];		
		
		if($_FILES["file"]["size"] > 0)
		{
		  	$file = fopen($filename, "r");
			
	        while(($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	        {
	            $sql = "INSERT into $message (course_no,course_title,credit) values ('".$getData[0]."','".$getData[1]."','".$getData[2]."')";
                
				$result = mysqli_query($coni, $sql);
				
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"question_2.php?msgq=$message\"
						  </script>";		
				}
				else 
				{
					  echo "<script type=\"text/javascript\">
						         alert(\"CSV File has been successfully Imported.\");
						         window.location = \"question_2.php?msgq=$message\"
						    </script>";
				}
	         }
			
	         fclose($file);	
		 }
	}

	mysqli_close($coni);

?>