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
?>

<!DOCTYPE html>
<html>
	<head>
			<title> My website</title>
			<meta charset = "utf-8">			
			<link rel="stylesheet" href="style.css">
			
			<script type="text/javascript">
        function hideQuestions()
        {
            // Hide the questions
            document.getElementById("page-wrap").style.display = "none";
            // Show the message that the questions timed out
            document.getElementById("quicker").style.display = "block";
        }
 
        function checkTime()
        {
            secondsLeft = secondsLeft - 1;
            if(secondsLeft <= 0)
            {
                hideQuestions();
                //alert("Time is up!");
                document.getElementById("secondsLeft").style.color = "red";
                window.clearInterval(myTimer);
                writeTime("Timed out!");	
            }
            else
            {
                writeTime(secondsLeft + "s");
            }
        }
 
        function writeTime(msg)
        {
            document.getElementById("secondsLeft").innerHTML = msg;
        }
		
		var timer = setTimeout(function() {
            document.querySelector('[name="submit"]').click();
        }, 100000);//wait 100+10 second to move to show result
		
		function myFunction(){
		document.getElementById("submit").click();
		}
    </script>
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
				<li> <a href="questions.php">Exam</a> </li>
				<li> <a href="profile.php">Result</a> </li>
				<li style="border-right:2px solid white;float:right"> <a href="logout.php">Logout</a> </li>
				<li style="border-left:2px solid red;border-right:2px solid red;float:right;"> <a href="info.php"><?php echo $id; ?> </a></li> 
			</ul>
		</div>
		
		<div class="contentsection template clear">
			<div id="page-wrap">
				<h1> Timeout Exam Question: <span id="secondsLeft"></span> </h1> </br>
				<h2> <?php echo $message; ?> </h2> </br>	
				<h2> MCQ QUIZ!!! </h2> </br>
				
				<?php
					$con = mysql_connect("localhost", "root", "") or  die("Could not connect: " . mysql_error());  
					mysql_select_db("vu");
				?>
				
				<form name="after_test" method ="post" action ="after_test.php?msgq=<?php echo $message; ?>" id="quiz">
					<?php
					
						$i=0;
						$quesans=array("quesans0","quesans1","quesans2","quesans3","quesans4","quesans5","quesans6","quesans7","quesans8","quesans9");
						
						$result = mysql_query("Select * from ques");
						$n = mysql_num_rows($result);
						
						$j = 0;
						$q_no = 0;
						for($i=0;$i<$n;$i++)  
						{
							$row = mysql_fetch_array($result);  
					?>
						<p> 
					<?php
							
							if($row['course_no'] == $message)
							{
								//echo $row['q_no'];
								$q_no++;
								echo $q_no;
								echo ". ";
								echo $row['q']." ";
							
					?>
						<input type="radio" name="<?=$quesans[$j];?>" value = "no input detected" checked/>
					<?php	
						echo "<br><br>";
					?>
						</p>
						
						<?php $option = $row['o_1']; ?>
						<input type="radio" name="<?=$quesans[$j];?>" value = "<?=$option;?>"> A)
						<?=$option?> <br><br>
	
						<?php $option = $row['o_2']; ?>
						<input type="radio" name="<?=$quesans[$j];?>" value = "<?=$option;?>"> B)
						<?=$option?> <br><br>
	
						<?php $option = $row['o_3']; ?>
						<input type="radio" name="<?=$quesans[$j];?>" value = "<?=$option;?>"> C)
						<?=$option?> <br><br>
	
						<?php $option = $row['o_4']; ?>
						<input type="radio" name="<?=$quesans[$j];?>" value = "<?=$option;?>"> D)
						<?=$option?> <br><br>
						
					<?php
							$j++;
							}
					?>
					<?php
						}
					?>
					
					<input type = "submit" name = "submit" id="submit" onclick="myFunction()" value = "Submit"> 
					</br></br></br>
					
				</form>
				
					<?php
						mysql_close($con); 
					?>
			</div>					
		</div>
		
		<div id="quicker" style="display:none;">
			<h2 style = "background-color:#eff; color:black; text-align:center;">You must answer more quickly next time!</h2>
		</div>
		
		<div class="footersection template clear">
			<h2>CONTACT US</h2>
			<p> 529/1, Kazla, Motihar, Rajshahi </p>
			<p> +880721-751274,+880721-751459 </p>
			<p> info@vu.edu.bd </p>
			<p>facebook.com/vu.edu </p>
		</div>
	</body>
	
	<script>
    var secondsLeft = 100;
    writeTime(secondsLeft + "s");
    var myTimer = window.setInterval(checkTime, 1000);
	</script>
	
</html>