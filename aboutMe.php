<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=0.75" />
		<title>Amy Hsuanwen Wang's Unity Portfolio</title> <!--Title-->
		<link rel="stylesheet" type = "text/css" href="portfolio.css"/> <!-- calling on style sheet and tell it that it's css -->
		<link rel="stylesheet" media="(max-width: 1024px)" type="text/css" href="portfolio_tablet.css" />  <!--Css for tablet-->
		<link rel="stylesheet" media="(max-width: 750px)" type="text/css" href="portfolio_mobile.css" /> <!-- Css for mobile-->
		<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
		<!--Fonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
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
				<img id="background" src="http://dl.dropbox.com/u/24053034/Public%20Portfolio/IMG_8704.jpg" />
			</div>

			<!--Where the information go-->
			<div class="col gu3" id="imgGallery3">
				<h1>About me</h1>
				<p class="indent">I am a fourth year SIAT student with an interest in 
				graphic design, web layout design, animation, music, film and culture. My interest steamed from popular culture such as Japanese animation and music. I am experienced with Premiere Pro, After Effects, Photoshop, Illustrator and Paintshop Sai.</p>
				<p class="indent topmargin">The purpose of this portfolio for me is to act as a way to track my progress and show case what I have learned. By making and completing this portfolio, I wish to demonstrate my proficiency in Unity as well as reminding myself as to what I am capable of and 
					continue to work my way up from there.</p>
			</div>

		</div>
		<footer>
			<h6>&copy; Amy Hsuanwen Wang</h6>
			<h6> website design/developed by Amy Hsuanwen Wang</h6>
		</footer>


	</body>
</html>