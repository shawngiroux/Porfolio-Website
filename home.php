<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shawn Giroux | Welcome!</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<!-- Custom styles for this template -->
    <link href="assets/css/home.css" rel="stylesheet">
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
		<div class="info">
			<div class="me">
				<img src="assets/img/me.JPG" alt="">
				<h1>Shawn Giroux</h1>
				<h2>Software Developer</h2>
			</div>
			<div class="description">
				<p>Welcome to my portfolio! Feel free to take a look at some of my <strong><a href="projects.php">projects</a></strong>, and learn a little bit <strong><a href="aboutme.php">about me</a></strong>.</p>
				<p>Want to contact me? Send an email to <strong><a href="mailto:shawn.giroux90@gmail.com" target="_top">shawn.giroux90@gmail.com</a></strong>!</p>
				<p>Please have a look around and enjoy your stay!</p>
				<p><i><strong>Note:</strong> I am still working on the mobile formating for this website. Please view on a desktop/laptop for a better
					viewing experience.</i></p>
			</div>
		</div>
	</div>
	<script>
		var hidden = false; // Determines is the navbar is hidden or not
		function hide() {
			if (hidden == false) {
				$('.navigate').animate({"width": '+=250'}, "fast");
				$('.wrapper').animate({"margin-left": '+=250'}, "fast");
				$("span").attr("class", "glyphicon glyphicon-remove");
				$(".navigate").css("border-right", "2px solid #ba949d");
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