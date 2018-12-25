<?php	

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "vu";

	// Create connection
	$con = mysqli_connect($servername, $username, $password, $dbname);
	
	// Check connection
	if (!$con) 
	{
		die("Connection failed: " . mysqli_connect_error());
	}

	// sql to create table
	$sql = "CREATE TABLE users (    username text(100) , 
									id text(100) NOT NULL, 
									password text(100) NOT NULL, 
									semester text(20) NOT NULL, 
									email text(100) NOT NULL, 
									phone text(100) NOT NULL,
									reg_date TIMESTAMP,
									exam integer NOT NULL,
									correct integer NOT NULL,
									wrong integer NOT NULL,
									not_answered integer NOT NULL
								)";

								
	if (mysqli_query($con, $sql)) 
	{
		echo "Table users created successfully";
	}
	else 
	{
		echo "Error creating table: " . mysqli_error($con);
	}
	
	echo "<br>";
	
	// sql to create table
	$sql = "CREATE TABLE submission (   exam_no INT NOT NULL auto_increment,
										id text(100) NOT NULL,
										course_no text(100) NOT NULL,
										correct INT NOT NULL,
										wrong INT NOT NULL,
										not_answered INT NOT NULL,
										obtain_marks FLOAT NOT NULL,
										rank INT NOT NULL,
										sub_date TIMESTAMP,
										primary key(exam_no)
									)";

	if (mysqli_query($con, $sql)) 
	{
		echo "Table submission created successfully";
	} 
	else 
	{
		echo "Error creating table: " . mysqli_error($con);
	}
	echo "<br>";
	
	
	$sql = "CREATE TABLE ranklist (   exam_no INT NOT NULL auto_increment,
										id text(100) NOT NULL,
										semester text(100) NOT NULL,
										course_no text(100) NOT NULL,
										obtain_marks FLOAT NOT NULL,
										rank INT NOT NULL,
										primary key(exam_no)
									)";

	if (mysqli_query($con, $sql)) 
	{
		echo "Table ranklist created successfully";
	} 
	else 
	{
		echo "Error creating table: " . mysqli_error($con);
	}
	echo "<br>";

	mysqli_close($con);
?>