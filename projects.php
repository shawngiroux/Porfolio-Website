<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shawn Giroux | Projects</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<!-- Custom styles for this template -->
    <link href="assets/css/projects.css" rel="stylesheet">
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

	<div class="wrapper">
		<div class="navigate-open">
			<a onclick="hide()">MENU<span class="glyphicon glyphicon-triangle-right"></span></a>
		</div>

		<div class="container">
			<h1 id="header">Take a look at some of my projects!</h1>

			<hr class="divider">

			<div class="row">
				<p class="title" style="padding-left: 15px;"><strong>Retro Game Store</strong></p>
				<div class="col-md-4">
					<a href="retrostore/home.php" target="_blank"><img src="assets/img/retro_thumbnail.jpg" alt="#"></a>
					<a href="retrostore/home.php" target="_blank">Check it out!</a>
				</div>
				<div class="col-md-8">
					<p>During the senior capstone course at my college, I worked on creating an inventory management system for the school. Unfortunately, most of the functionality
					couldn't be added to this website, so I decided to make another website that focused on database interaction.</p>
					<p>This was a fun little project that let me try working on a few different things, such as a dynamic search bar.</p>
					<p><strong>Languages:</strong> <interest>HTML, CSS, SQL, PHP, Javascript</interest></p>
				</div>
			</div>

			<hr class="divider">

			<div class="row">
				<p class="title"><strong>Content Management System</strong></p>
				<div class="col-md-4">
					<a href="https://youtu.be/-u_5qKIk2M4" target="_blank"><img id="need-border" src="assets/img/cms_pic.JPG" alt="#"></a>
					<a href="https://youtu.be/-u_5qKIk2M4" target="_blank">Check it out!</a>
				</div>
				<div class="col-md-8">
					<p>Although I couldn't add the project to this website, I was able to make a <a href="https://youtu.be/-u_5qKIk2M4" target="_blank">video demonstration</a>.  The website dealt with manipulating a database through anadmin account, and I didn't want to unleash that potential to the internet. 
					Unfortunately, I cannot upload the code for this project since my school will be using it.</p>
					<p><strong>Languages:</strong> <interest>HTML, CSS, SQL, PHP, Javascript, Python</interest></p>
				</div>
			</div>

			<hr class="divider">

			<div class="row">
				<p class="title"><strong>Chat Server/Client</strong></p>
				<div class="col-md-4">
					<a href="https://github.com/shawngiroux/Chat-Application-Server" target="_blank"><img src="assets/img/coffee_bean.PNG" alt="https://github.com/shawngiroux/Chat-Application-Server"></a>
					<a href="https://github.com/shawngiroux/Chat-Application-Server" target="_blank">Check it out!</a>
				</div>
				<div class="col-md-8">
					<p>I made a chat/server client in on winter break after taking an introductory programming class. Winter break made for a great time to learn about deadlines, 
					so I was able to understand time constraints a bit. The code for this project is on my <a href="https://github.com/shawngiroux/Chat-Application-Server" target="_blank">github</a>.</p>
					<p><strong>Languages:</strong> <interest>C#</interest></p>
				</div>
			</div>
			<div class="extra-space"></div>
		</div>
	</div>
	<script>
		var hidden = false; // Determines is the navbar is hidden or not
		function hide() {
			if (hidden == false) {
				$('.navigate').animate({"width": '+=250'}, "fast");
				$('.wrapper').animate({"margin-left": '+=250'}, "fast");
				$("span").attr("class", "glyphicon glyphicon-remove");
				$(".navigate").css("border-right", "2px solid #adc9a3");
				hidden = true;
			} else {
				$('.navigate').animate({"width": '-=250'}, "fast");
				$('.wrapper').animate({"margin-left": '-=250'}, "fast");
				$("span").attr("class", "glyphicon glyphicon-triangle-right");
				$(".navigate").css("border-right", "none");
				hidden = false;
			}
		}
	</script>
</body>
</html>