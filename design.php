<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="height=device-height, initial-scale=0.75" />
		<title>Amy Hsuanwen Wang's Unity Portfolio</title> <!--Title-->
		<link rel="stylesheet" type = "text/css" href="portfolio.css"/> <!-- calling on style sheet and tell it that it's css -->
		<link rel="stylesheet" media="(max-width: 1024px)" type="text/css" href="portfolio_tablet.css" />  <!--Css for tablet-->
		<link rel="stylesheet" media="(max-width: 750px)" type="text/css" href="portfolio_mobile.css" /> <!-- Css for mobile-->
		<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
		<!--Fonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
		<!-- Modernizr -->
		<script src="js/modernizr.js"></script>
		<!--Style for ligthbox-->
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
		<!--JQuery-->
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script type='text/javascript' src="js/jquery.chocolat.js"></script>
		<script type='text/javascript' src='js/jquery.min.js'></script>
    	<script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
    	<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
		<!-- FlexSlider -->
		<script src="jquery.flexslider.js"></script>

		<script>
			$(document).ready(function(){
			  $("#contactme").click(function(){
			    $("#contactinfo").slideToggle();
			    $(this).toggleClass("down");
			  });
			});
		</script>
		<script type="text/javascript">
				$(function() {
					$('#example6 a').Chocolat({overlayColor:'#000',leftImg:'images/leftw.gif',rightImg:'images/rightw.gif',closeImg:'images/closew.gif'});
				});
		</script>
		<script type="text/javascript">
		  $(function(){
		    SyntaxHighlighter.all();
		  });
		  $(window).load(function(){
		    $('.flexslider').flexslider({
		      animation: "slide",
		      start: function(slider){
		        $('body').removeClass('loading');
		      }
		    });
		  });
		</script>

	</head>
	<body>
		<header>
			<div class="col gu6">
				<img id="logo" src="img/Logo.png" />
			</div>	
			<div class="col gu6">
				<nav>
					<ul id="nav">
						<li><a href="finalProject.php">Final Project</a></li>
						<li><a >Unity Projects</a>
							<ul>
								<li><a href="assignment1.php">Assignment 1</a></li>
								<li><a href="assignment2.php">Assignment 2</a></li>
								<li><a href="assignment3.php">Assignment 3</a></li>
								<li><a href="LearningOutcome.php">Learning Outcome</a></li>
							</ul>
						</li>
						<li><a href="aboutMe.php">About me</a></li>
						<li><a id="contactme" href="#" title="button">Contact</a></li>
						<li><a href="index.html">Home</a></li>
					</ul>
				</nav>
			</div>

			<div class="col gu6" id="contactinfo">
				<h3><a href="mailto:AmyHsuanwenWang@gmail.com">Email: amy_wang_2@sfu.ca</a></h3>
			</div>
		</header>

		<div class="wrap">
			<div class="col gu6" >
				<img id="background" src="images/IMAG0247.jpg" />
			</div>

			<!--Where the information go-->
			<div class="col gu3" id="infomation-longer">
				<h1>Design Process : Finding Alice</h1>
				<p class="indent">The design process of Finding Alice started off with a 
					brainstorming session. At that point in time, the groups were not finalized and thus we just had a group of 6 people throwing ideas onto sticky notes and then we sorted that using affinity diagram. The original idea was to create several different upside down worlds so that as the player explores, the world turns. After the groups were finalized, we still decided to stick with the Alice theme and different worlds. Our next step was to figure out what we wanted and how to create it. We went through several sketching stages. The ones on the left were the final ones after we discarded a total of at least 3 different ideas. From there on, the process 
					involves Coding and checking. As one Scene is coded and 
					completed, another member will check for sound inconsistencies and bugs. This step was repeated 8 times as we had 8 scenes. As sound plays a big part in our immersion framework, it was one of the things that we paid special attention to.</p>
			</div>

			<div class="col gu3" id="imgGallery">
				<p id="example6">
					<a href="images/IMAG0247.jpg" title="screenshot 1">
						<img class="iconBorder" height="60" src="images/IMAG0247.jpg" alt=""/>
					</a>
					<a href="images/IMAG0248.jpg" title="screenshot 2">
						<img class="iconBorder" height="60" src="images/IMAG0248.jpg" alt=""/>
					</a>
					<a href="images/IMAG0249.jpg" title="screenshot 3">
						<img class="iconBorder" height="60" src="images/IMAG0249.jpg" alt=""/>
					</a>
					<a href="images/IMAG0250.jpg" title="screenshot 4">
						<img class="iconBorder" height="60" src="images/IMAG0250.jpg" alt=""/>
					</a>
					<a href="images/IMAG0251.jpg" title="screenshot 5">
						<img class="iconBorder" height="60" src="images/IMAG0251.jpg" alt=""/>
					</a>
					<a href="images/IMAG0252.jpg" title="screenshot 6">
						<img class="iconBorder" height="60" src="images/IMAG0252.jpg" alt=""/>
					</a>
					<a href="images/IMAG0253.jpg" title="screenshot 7">
						<img class="iconBorder" height="60" src="images/IMAG0253.jpg" alt=""/>
					</a>
					<a href="images/6.jpg" title="screenshot 8">
						<img class="iconBorder" height="60" src="images/6.jpg" alt=""/>
					</a>
					<a href="images/7.jpg" title="screenshot 9">
						<img class="iconBorder" height="60" src="images/7.jpg" alt=""/>
					</a>
					<a href="images/8.jpg" title="screenshot 10">
						<img class="iconBorder" height="60" src="images/8.jpg" alt=""/>
					</a>
					<a href="images/4.jpg" title="screenshot 11">
						<img class="iconBorder" height="60" src="images/4.jpg" alt=""/>
					</a>
					<a href="images/5.jpg" title="screenshot 12">
						<img class="iconBorder" height="60" src="images/5.jpg" alt=""/>
					</a>
					<a href="images/CardChase.png" title="screenshot 13">
						<img class="iconBorder" height="60" src="images/CardChase.png" alt=""/>
					</a>
					<a href="images/ClockWork.png" title="screenshot 14">
						<img class="iconBorder" height="60" src="images/ClockWork.png" alt=""/>
					</a>
				</p>
			</div>

		</div>
		<footer>
			<h6>&copy; Amy Hsuanwen Wang</h6>
			<h6> website design/developed by Amy Hsuanwen Wang</h6>
		</footer>


	</body>
</html>