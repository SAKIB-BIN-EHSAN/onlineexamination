<?php  

	session_start();    
	
	$id=$_SESSION['id'];

	if(!$_SESSION['id'])  
	{  
		header("Location: home.php");    //redirect to main home page to secure the welcome page without login access.  
	}  
?>


<!DOCTYPE html>
<html>
	<head>
			<title> My website</title>
			<meta charset = "utf-8">
			<link rel="stylesheet" href="style.css">
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
				<li> <a id="active" href="home_after_login.php">Home</a> </li>
				<li> <a href="about_after_login.php">About</a> </li>
		
		<?php
				if($id != "1000000001")
				{
		?>			
					<li> <a href="questions.php">Exam</a> </li>
					<li> <a href="profile.php">Result</a> </li>
					<li style="border-right:2px solid white;float:right"> <a href="logout.php">Logout</a> </li>
					<li style="border-left:2px solid red;border-right:2px solid red;float:right;"> <a href="info.php"><?php echo $id; ?> </a></li>
		<?php	
				}
				else if($id == "1000000001")
				{
		?>
					<li> <a href="questions.php">Semesters</a> </li>
					<li style="border-left:2px solid red;border-right:2px solid white;float:right"> <a href="logout.php">Logout</a> </li>
		<?php
				}
		?> 
			</ul>
		</div>
		
		<div class="contentsection template clear">
			<div class="syn clear">
				<h2>Syndicate Metting</h2>
				<img src="images/syndread.jpg" alt="post image"/>
					<meta>
					<p>
						গত রবিবার ২৩ এপ্রিল ২০১৭ সকাল ১০টায় বরেন্দ্র বিশ্ববিদ্যালয় সিন্ডিকেটের ৪র্থ সভা বিশ্ববিদ্যালয়ের কাজলা ক্যাম্পাসের বোর্ডরুমে অনুষ্ঠিত হয়।
						সভায় উপস্থিত ছিলেন সিন্ডিকেট সদস্য বরেন্দ্র বিশ্ববিদ্যালয়ের উপ-উপাচার্য প্রফেসর ড. নূরুল হোসেন চৌধুরী, প্রফেসর ড. এস. এ. হায়দার, মো: মোজাম্মেল হোসেন,
						মিসেস কামরুন রহমান খান, মোহাম্মদ আলী দ্বীন, প্রফেসর ড. আতফুল হাই শিবলী, প্রফেসর ড. শেখ শামসুল আরেফিন, প্রফেসর ড. তারিক সাইফুল ইসলাম এবং সদস্য সচিব মুহাম্মদ রায়হান ফেরদৌস।
					</p>
					<p>
						সভায় সভাপতিত্ব করেন বরেন্দ্র বিশ্ববিদ্যালয়ের  উপাচার্য প্রফেসর ড. এম. ওসমান গনি তালুকদার। 
						সভায় একাডেমিক ও প্রশাসনিক বেশ কিছু গুরুত্বপূর্ণ সিদ্ধান্ত ও মাননীয় রাষ্ট্রপতি কর্তৃক মনোনিত অডিট ফার্ম দ্বারা ২০১৪-১৫ এবং ২০১৫-১৬ অর্থ বছরের আয়-ব্যয় সংক্রান্ত রিপোর্ট গৃহীত হয়।
					</p>
					</meta>
				</div>				
			</div>
			
		</div>
		
		<div class="footersection template clear">
			<h2>CONTACT US</h2>
			<p> 529/1, Kazla, Motihar, Rajshahi </p>
			<p> +880721-751274,+880721-751459 </p>
			<p> info@vu.edu.bd </p>
			<p>facebook.com/vu.edu </p>
		</div>
</html>