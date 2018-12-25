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
				<h2>NATIONAL MOURNING DAY 2017</h2>
				<img src="images/nationalread.jpg" alt="post image"/>
					<meta>
					<p>
						রাজশাহীর বরেন্দ্র বিশ্বদ্যিালয়ে যথাযোগ্য মর্যাদায় জাতীয় শোক দিবস পালন করা হয়েছে। 
						দিবসটি উপলক্ষে আজ ১৫ আগস্ট   সকাল ১০টায় বিশ্ববিদ্যালয়ের কাজলা ক্যাম্পাসে আলোচনা সভার আয়োজন করা হয়।
					</p>
					<p>
						জাতীয় পতাকার অর্ধনমিত উত্তোলন, শোকের প্রতিক কালো পতাকা উত্তোলন ও কালো ব্যাজ পরিধান এবং বঙ্গবন্ধু শেখ মুজিবুর রহমানের প্রতিকৃতিতে পুষ্পমাল্য অর্পণের মধ্য দিয়ে এই দিবসটির প্রতি শ্রদ্ধা জ্ঞাপন করা হয়। 
						বঙ্গবন্ধু শেখ মুজিবুর রহমানের প্রতি উৎসর্গকৃত একটি গানের ভিডিওচিত্র প্রদর্শন করেন সমাজ বিজ্ঞান বিভাগের প্রভাষক শেখ শেমন্তী। 
						এর পরপরই শোক দিবস উপলক্ষে শুরু হয় আলোচনা সভা। উক্ত আলোচনা সভায় সভাপতি হিসাবে উপস্থিত ছিলেন বরেন্দ্র বিশ্বদ্যিালয়ের মাননীয় উপাচার্য প্রফেসর ড. এম ওসমান গনি তালুকদার। 
						এছাড়াও আলোচক হিসাবে উপস্থিত ছিলেন মাননীয় উপ-উপাচার্য প্রফেসর ড. নূরুল হোসেন চৌধুরী, কলা ও সামাজিক বিজ্ঞান অনুষদের ডীন অধ্যাপক তারিক সাইফুল ইসলাম, ইংরেজি বিভাগের বিভাগীয় প্রধান অধ্যাপক শহীদুর রহমান, 
						আইন বিভাগের কো-অর্ডিনেটর অধ্যাপক আনিসুর রহমান, সমাজবিজ্ঞান বিভাগের কো-অর্ডিনেটর এ এইচ এম মোস্তাফিজুর রহমান, ন্যাচর‌্যাল সায়েন্স বিভাগের কো-অর্ডিনেটর ড. মো: কামরুজ্জামান, জার্নালিজম কমিউনিকেশন এ্যান্ড মিডিয়া স্টাডিজ বিভাগের কো-অর্ডিনেটর মো: মশিহুর রহমান 
						এবং সিএসই বিভাগের কো-অর্ডিনেটর মো: খাদেমুল ইসলাম মোল্লা।
					</p>
					<p>
						আলোচনাসভায় আলোচকগণ বঙ্গবন্ধু শেখ মুজিবুর রহমানের দেশ প্রেমের আদর্শ নবীন প্রজন্মের মাঝে যেন ছড়িয়ে পড়ে সেই প্রত্যাশাই ব্যক্ত করেন।
						আলোচনা শেষে বরেন্দ্র বিশ্বদ্যিালয়ের স্বেচ্ছাসেবী সংগঠন প্রথম আলো বন্ধুসভা ও ছোট্টস্বপ্ন’র উদ্যোগে পথশিশুদের মাঝে দুপুরের খাবার বিতরন করা হয়।
						স্বেচ্ছাসেবকগণ তাদের অক্লান্ত শ্রম দিয়ে অনুষ্ঠানটি সার্থক করে তোলেন।
					</p>
					<p>
						জাতীয় দিবস উদযাপন কমিটির আহ্বায়ক ও ইংরেজী বিভাগের সহকারী অধ্যাপক মো. আকরাম হোসেনের সঞ্চালনায় এবং বিশ্ববিদ্যালয়ের বিভিন্ন বিভাগের শিক্ষক,
						কর্মকর্তা-কর্মচারীবৃন্দের উপস্থিতিতে আজকের আলোচনাসভাটি প্রাণবন্ত হয়ে ওঠে।
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