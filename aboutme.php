<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shawn Giroux | About Me</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<!-- midnight javascript -->
	<script src="assets/scripts/js/midnight.jquery.min.js"></script>
	<!-- custom stylesheet -->
	<link rel="stylesheet" href="assets/css/aboutme.css">
</head>
<body>
	<div class="navigate">
		<a href="home.php">Home</a>
		<a href="projects.php">Projects</a>
		<a href="aboutme.php">About Me</a>
		<div class="links">
			<a href="https://github.com/shawngiroux/" target="_blank">Github</a>
			<a href="http://www.linkedin.com/in/shawngiroux/" target="_blank">LinkedIn</a>
			<a href="mailto:shawn.giroux90@gmail.com" target="_top">shawn.giroux90@gmail.com</a>
		</div>
	</div>

	<nav class="fixed">
		<div class="midnightHeader default">
			<div class="logo-holder">
				<a class="logo noselect" onclick="hide()">MENU<span class="glyphicon glyphicon-triangle-right menu-glyphicon"></span></a>
			</div>
		</div>
	</nav>

	<div class="header-image">
		<img data-midnight="white" src="assets/img/aboutme.jpg" alt="">
	</div>

	<div class="aboutme start">
		<h1>About Me</h1>
		<p>Hello world! My name is <strong class="interest">Shawn Giroux</strong>, and I recently graduated from Manchester Community College with an Associate's Degree in <strong class="interest">Computer Science</strong> (<i>3.94 GPA</i>). Programming is my passion, and I am excited to work with a team of others who share this feeling.</p>
		
		<div class="additional-info col-md-6">
			<button id="start-programming" class="btn btn-primary" onclick="scrollToDiv('#stock-image1')">Why Did I Start Programming?</button>
		</div>

		<div class="additional-info col-md-6">
			<button id="before-programming" class="btn btn-primary" onclick="scrollToDiv('#stock-image2')">What Did I Do Before Computer Science?</button>
		</div>
	</div>

	<img class="aboutme-images" id="stock-image1" data-midnight="white" src="assets/img/monitor.jpg" alt="">
	<div class="aboutme">
		<div id="my-start" class="additional-info-text">
			<h1>Why Did I Start Programming?</h1>
			<p>Up until a few years ago, I had not had any real experience in programming. In 2013, a friend of my wife's noticed that I liked playing video games, which lead her to question, "<strong><i>Why don't you make a video game yourself?</i></strong>". I wanted to respond with a thousand reasons as to how this was improbable; however, I then realized that I had already been telling others that if they wanted to program, they could learn from the overabundance of documentation readily available online.</p>
			<p>This is where my journey began. Like other beginners, I tried to find the "best" programming language to start with, which was pointless because any language is a good place to start, but I ultimately decided on <strong class="interest">C#</strong> to make a Microsoft XNA game. I attempted some game development tutorials, but realized that I was just copying/pasting and that I needed to learn how to program from the basics.</p>
			<p>I began reading <a href="http://rbwhitaker.wikidot.com/c-sharp-tutorials">these</a> tutorials, and started building a foundation for myself. After being familiar enough to write a text adventure on my own, I realized that I did not want to make video games; I really just wanted to create software in general. It was about this time that I realized my passion for programming and decided that this was the career I wanted to pursue!</p>
		</div>
	</div>

	<img class="aboutme-images" id="stock-image2" data-midnight="white" src="assets/img/coffee.jpg" alt="">
	<div class="aboutme">
		<div id="my-past" class="additional-info-text">
			<h1>What Did I Do Before Computer Science?</h1>
			<p>Before I started programming, I was a <strong class="interest">karate instructor</strong>. Working as an instructor helped me develop my ability to work with others and helped me realize my passion for teaching. One of the parts about college that I really enjoyed was helping other students understand how to program and find better ways to overcome their challenges. My job as an instructor gave me a lot of characteristics that I believe will be invaluable throughout my entire life and my career. I can attribute a lot of my success and discipline to that position.</p>
			<p>On top of helping me build a strong personal foundation, being a karate instructor also gave me a decent amount of free time. Thanks to my flexible schedule, I had the opportunity to write pseudocode between classes, brush up on my math skills, work on projects, and pick up a passion I never knew I had!</p>
		</div>
	</div>

	<div class="scroll-button">
		<button id="scroll-up"><span class="glyphicon glyphicon-chevron-up"></span></button>
	</div>

	<footer></footer>

	<script>
		// Start midnight
		$(document).ready(function(){
		  $('nav.fixed').midnight();
		});

		$("#scroll-up").click(function (){
			$("html, body").animate({scrollTop: 0}, "slow");
			return false;
		});

		function scrollToDiv(id) {
			$("html, body").animate({scrollTop: $(id).offset().top}, "slow");
		}

		var hidden = false; // Determines is the navbar is hidden or not
		function hide() {
			if (hidden == false) {
				$('.navigate').animate({"width": '+=250'}, "fast");
				$('.aboutme, .header-image, .fixed').animate({"margin-left": '+=250'}, "fast");
				$(".menu-glyphicon").attr("class", "glyphicon glyphicon-remove menu-glyphicon");
				$(".navigate").css("border-right", "2px solid #bacad6");
				hidden = true;
			} else {
				$('.navigate').animate({"width": '-=250'}, "fast");
				$('.aboutme, .header-image, .fixed').animate({"margin-left": '-=250'}, "fast");
				$(".menu-glyphicon").attr("class", "glyphicon glyphicon-triangle-right menu-glyphicon");
				$(".navigate").css("border-right", "none");
				hidden = false;
			}
		}
	</script>
</body>
</html>