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

	$coni = mysqli_connect("localhost" , "root" , "" , "vu")  or  die("Connection failed: ".mysqli_connect_error());

	if(isset($_POST["Import"])){
		
		$filename=$_FILES["file"]["tmp_name"];		
		
		if($_FILES["file"]["size"] > 0)
		{
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 100000, ",")) !== FALSE)
	        {
				
	            $sql = "INSERT into ques (course_no,semester,q,o_1,o_2,o_3,o_4,r) values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."')";
               
			    $result = mysqli_query($coni, $sql);
				
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"question_upload.php?msgq=$message\"
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"question_upload.php?msgq=$message\"
					</script>";
				}
	         }
			
	         fclose($file);	
		 }
	}

	mysqli_close($coni);

?>