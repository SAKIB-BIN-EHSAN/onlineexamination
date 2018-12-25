<?php  

	session_start();    //home page after login
	
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
	
	<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
			
<link rel="stylesheet" href="style.css">
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:2200,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
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
		
		<div class="slidersection templete clear">
			<div id="slider">
				<a href="#"><img src="images/slideshow/01.jpg" alt="nature 1" title="This is slider one."/></a>
				<a href="#"><img src="images/slideshow/03.jpg" alt="nature 3" title="This is slider two."/></a>
				<a href="#"><img src="images/slideshow/04.jpg" alt="nature 4" title="This is slider three."/></a>
			</div>
		</div>
		
		<div class="contentsection template clear">
			<div class="maincontent clear">
				<div class="samepost clear">
					<h2>Syndicate Metting</h2>
					<img src="images/meeting.jpg" alt="post image"/>
						<meta>
						<p>
						গত রবিবার ২৩ এপ্রিল ২০১৭ সকাল ১০টায় বরেন্দ্র বিশ্ববিদ্যালয় সিন্ডিকেটের ৪র্থ সভা বিশ্ববিদ্যালয়ের কাজলা ক্যাম্পাসের বোর্ডরুমে অনুষ্ঠিত হয়।
						সভায় উপস্থিত ছিলেন সিন্ডিকেট সদস্য বরেন্দ্র বিশ্ববিদ্যালয়ের উপ-উপাচার্য প্রফেসর ড. নূরুল হোসেন চৌধুরী, প্রফেসর ড. এস. এ. হায়দার, মো: মোজাম্মেল হোসেন,
						মিসেস কামরুন রহমান খান, মোহাম্মদ আলী দ্বীন, প্রফেসর ড. আতফুল হাই শিবলী, প্রফেসর ড. শেখ শামসুল আরেফিন, প্রফেসর ড. তারিক সাইফুল ইসলাম এবং সদস্য সচিব মুহাম্মদ রায়হান ফেরদৌস।
						</p>
						</meta>
					<div class="readmore clear"> 
						<a href="synd_after_login.php">Read More</a> 
					</div>
				</div>
				
				<div class="samepost clear">
					<h2> NATIONAL MOURNING DAY 2017 </h2>
					<img src="images/national.jpg" alt="post image"/>
						<meta>
						<p>
						রাজশাহীর বরেন্দ্র বিশ্বদ্যিালয়ে যথাযোগ্য মর্যাদায় জাতীয় শোক দিবস পালন করা হয়েছে। 
						দিবসটি উপলক্ষে আজ ১৫ আগস্ট   সকাল ১০টায় বিশ্ববিদ্যালয়ের কাজলা ক্যাম্পাসে আলোচনা সভার আয়োজন করা হয়।
						</p>
						</meta>
					<div class="readmore clear">
						<a href="mourn_after_login.php">Read More</a>
					</div>
				</div>
				
			</div>
			<div class="sidebar clear">
				<div class="samesidebar clear">
					<h2>Welcome to VU</h2>
					<p>
					The mission of VU is to emerge as one of the leading and premier centre of higher studies in Arts, Social Science, Science, Engineering and technology. 
					The University is providing education of high excellence to our young learners in a congenial and friendly atmosphere, and attracting brilliant students, distinguished scholars, researchers, scientists from home and abroad. 
					Since its commencement on 14 March 2012, VU endeavors to accelerate students’ technological, intellectual, social and personal potentials providing them dynamic guidance and latest information about the new technologies of the world so that they can keep pace with the time and contribute to the advancement of the society.
					</p>
				</div>
			</div>
			
			<div class="belowsidebar clear">
				<div class="below clear">
					<h2>Notices</h2>
						<ul>
							<li><a href="brain_after_login.php">Brain of Varendra University Competition</a></li>
							<li><a href="brain_of_intelligence_after_login.php">Brain of Intelligence: Quiz Competition-2017</a></li>
							<li><a href="exam_routine_after_login.php">Final exam routine Summer-17 CSE Dept. - (27/07/2017)</a></li>
							<li><a href="class_routine_after_login.php">Cse class routine FALL-2017 - (14/09/2017)</a></li>
						</ul>
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