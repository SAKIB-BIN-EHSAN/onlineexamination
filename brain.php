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
				<li> <a id="active" href="home.php">Home</a> </li>
				<li> <a href="about.php">About</a> </li>
				<li style="border-right:2px solid white;float:right"> <a href="login_form.php">Login</a> </li>
				<li style="border-left:2px solid red;border-right:2px solid red;float:right;"> <a href="register_form.php">Register</a> </li>
			</ul>
		</div>
		
		<div class="contentsection template clear">
			<div class="syn clear">
				<h2>Brain of Varendra University Competition</h2>
				<img src="images/Brain_of_VU.jpg" alt="post image"/>
					<meta>
					<p style="padding-top:30px;">
						গত ২৯ জানুয়ারি ২০১৭ রোববার সকাল ১১.৩০ মিনিটে বরেন্দ্র বিশ্ববিদ্যালয়ের আন্ত:বিভাগ সাধারণ জ্ঞান প্রতিযোগীতা ব্রেইন অব বরেন্দ্র বিশ্ববিদ্যালয়ের ফাইনাল রাউন্ড অনুষ্ঠিত হয় রুয়েট অডিটোরিয়ামে । 
						এই সাধারণ জ্ঞান প্রতিযোগীতায় প্রথম স্থান অধিকার করে “ব্রেইন অব বরেন্দ্র বিশ্ববিদ্যালয়” উপাধী পান ফার্মেসী বিভাগের ৬ষ্ঠ সেমিস্টারের শিক্ষার্থী মো: রেজাউল করিম।
					</p>
					<p>
						বিজয়ী প্রতিযোগীর হাতে পুরষ্কার তুলে দেন অনুষ্ঠানের প্রধান অতিথি বরেন্দ্র বিশ্ববিদ্যালয়ের ট্রাস্টিবোর্ডের চেয়ারম্যান জনাব হাফিজুর রহমান খান এবং অনুষ্ঠানটি সভাপতিত্ব করেন বরেন্দ্র বিশ্ববিদ্যালয়ের উপাচার্য প্রফেসর ড. এম. ওসমান গনি তালুকদার। 
						বিশেষ অতিথী হিসেবে উপস্থিত ছিলেন বরেন্দ্র বিশ্ববিদ্যালয়ের উপদেষ্টা, প্রফেসর ড. এম. সাইদুর রহমান খান। 
						এছাড়াও অনুষ্ঠানে উপস্থিত ছিলেন, এ.কে.এম. কামরুজ্জামান খান, (সেক্রেটারি জেনারেল, বরেন্দ্র বিশ্ববিদ্যালয় ট্রাস্ট), মো: জহরুল আলম (ট্রেজারার, বরেন্দ্র বিশ্ববিদ্যালয় ট্রাস্ট), মোহাম্মদ আলী দ্বীন (সদস্য, বরেন্দ্র বিশ্ববিদ্যালয় ট্রাস্ট) এবং বরেন্দ্র বিশ্ববিদ্যালয়ের সকল অনুষদের ডীন, বিভাগীয় প্রধান ও শিক্ষকবৃন্দ ।
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