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
			
			
			<script type="text/javascript" src="js/jquery-git.js"></script>
      <script type="text/javascript" src="js/jspdf.min.js"></script>
    
  
<script type='text/javascript'>
$(window).on('load', function() {
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('result.pdf');
});
});

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
				<h1> <?php echo $message; ?> </h1> </br>
				<h1 style="margin-bottom:30px;"> Mark Sheet: </h1>
				
				<?php
					$coni = mysqli_connect("localhost" , "root" , "" , "vu")  or  die("Connection failed: ".mysqli_connect_error());
					$con = mysql_connect("localhost", "root", "") or  die("Could not connect: " . mysql_error());  
					mysql_select_db("vu");
					
					$quesans=array("quesans0","quesans1","quesans2","quesans3","quesans4","quesans5","quesans6","quesans7","quesans8","quesans9");
	
					$query=array();
					$totalr = 0;
					$totalw = 0;
					$totaln = 0;
					
					$result1 = mysql_query("Select * from ques");
					$n = mysql_num_rows($result1);
					
					$j = 0;
					for($i=0;$i<$n;$i++)
					{
						$row = mysql_fetch_array($result1);
						if($row['course_no'] == $message)
						{
							$j++;
						}
					}
				
					$k = 0;
					$q_no = 0;
					$result1 = mysql_query("Select * from ques");
					$n = mysql_num_rows($result1);
					
					for($i=0;$i<$n;$i++)
					{
						$row = mysql_fetch_array($result1);
						
						if($row['course_no'] == $message)
						{
							$semesterno = $row['semester'];
							$que=$quesans[$k];
		
							$query[$k] = mysql_real_escape_string($_POST[$que]) or die("Failed to query database ");
						
						
		
						//$result = mysql_query("SELECT * FROM ques WHERE $cor==$message AND q_no='$k'+1 ") or die("Failed to query database ".mysql_error());
				
						//$row = mysql_fetch_array($result);
						$x = preg_replace('/\s+/','',$query[$k]);   //remove space and whitespace
						$y = preg_replace('/\s+/','',$row['r']);
						
						$q_no++;
						echo $q_no;
						echo ". ";
						echo $row['q'];
						echo "<br><br>";
		
						if(!strcasecmp($x,"noinputdetected") )
						{
							echo "Not Answered<br>";
							echo "Right Answer: ".$row['r']."<br>";
							$totaln++;
						}
						else
						{
		
							echo "Given Answer: ".$query[$k]."<br>";
							echo "Right Answer: ".$row['r']."<br>";
							echo "<br>";
							if(!strcasecmp($x,$y) )
							{
								echo "Given Answer is Right.<br>";
								$totalr++;
							}
							else 
							{
								echo "Given Answer is Wrong.<br>";
								$totalw++;
							}
						}
						echo "<br><br>";
						$k++;
						}
					}
					
					$userdt = mysql_query("Select username from users where id = $id");
					$uname = mysql_fetch_array($userdt);
					$username = $uname['username'];
					
					
					
					echo "<div id='content'>";
					$mark = $totalr-0.25*$totalw;
					
					echo "<div class='pdfhidden'>";
					echo "<div id='results'>Semester : $semesterno</div>";
					echo "<div id='results'>Course No : $message</div>";
					echo "<div id='results'>Name : $username</div>";
                    echo "<div id='results'>User Id : $id</div>";
                    echo "<div id='results'>-----------------</div>";
					echo "</div>";
					echo "<div id='results'>$totalr / $j correct</div><br>";
					echo "<div id='results'>$totalw / $j wrong</div><br>";
					echo "<div id='results'>$totaln / $j not answered</div><br>";
					echo "<div id='results'>Marks: $mark</div><br>";
					echo "</div>";
                    echo "<div align='right'><button id='cmd' style='font-size: 16px;'>Save as PDF</button></div>";
					
					$sql = "INSERT INTO submission(id,course_no,correct,wrong,not_answered,Obtain_marks) VALUES 
						('{$id}','{$message}',$totalr,$totalw,$totaln,$mark)";
						
					if (mysqli_query($coni, $sql)) 
					{
						//echo "Data1 was inserted  in table submission."."<br>";
					} 
					else 
					{
						echo "no insertion" . mysqli_error($coni);
					}
					
					$res1 = mysql_query("SELECT * FROM courses");
					$n1 = mysql_num_rows($res1);
					for($i=0;$i<$n1;$i++)
					{
						$r1 = mysql_fetch_array($res1);
						if($r1['course_no'] == $message)
						{
							$sem = $r1['semester'];
							break;
						}
					}
					
					$sql2 = "INSERT INTO ranklist(id,semester,course_no,Obtain_marks) VALUES 
						('{$id}','{$sem}','{$message}',$mark)";
						
					if (mysqli_query($coni, $sql2)) 
					{
						//echo "Data1 was inserted  in table submission."."<br>";
					} 
					else 
					{
						echo "no insertion" . mysqli_error($coni);
					}
					
					
					$result = mysql_query("SELECT * FROM submission") or die("Failed to query database ".mysql_error());
					$n = mysql_num_rows($result);
					$exam = 0;
					$correct = 0;
					$wrong = 0;
					$not_answered = 0;
					
					for($i=0;$i<$n;$i++)
					{
						$row = mysql_fetch_array($result);
						if($row['id'] == $id)
						{
							$exam++;
							$correct = $correct + $row['correct'];
							$wrong = $wrong + $row['wrong'];
							$not_answered = $not_answered + $row['not_answered'];
						}
					}
					
					$sql = "UPDATE users SET exam=$exam, correct=$correct, wrong=$wrong, not_answered=$not_answered WHERE id = '{$id}'";
					if (mysqli_query($coni, $sql)) 
					{
						
					} 
					else 
					{
						echo "unsuccessful data insertion" . mysqli_error($coni);
					}
					
					{
						
						$cd = $message;
						$set = mysql_query("SELECT * FROM submission WHERE course_no = '{$cd}' ORDER BY obtain_marks DESC,sub_date ASC") or  die("Could not connect: " . mysql_error());
						$n2 = mysql_num_rows($set);
					
						for($j=0;$j<$n2;$j++)
						{
							$row2 = mysql_fetch_array($set);
							$eno = $row2['exam_no'];
							$sid = $row2['id'];
							$cid = $row2['course_no'];
							$val = $j+1;
						
							$qr = mysql_query("UPDATE ranklist SET rank = $val WHERE id = '{$sid}' AND course_no = '{$cid}' AND exam_no = '{$eno}'") or  die("Could not connect: " . mysql_error());
						}
					}
					
					
					mysqli_close($coni);				
					mysql_close($con);
				?>
				
				<form action="questions.php" method="post">
					<table>
						<tr>
							<td></td>
							<td> <input style="margin-top:40px;margin-left:300px;width:300px;"type="submit" name="submit" value="Click Here To Start The test"> </td>
						</tr>
					</table>
				</form>

				<form action="choose.php" method="post">
					<table>				
						<tr>
							<td></td>
							<td> <input style="margin-left:300px;width:300px;"type="submit" name="submit" value="Click Here To See Result"> </td>
						</tr>
					</table>
				</form>
				
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