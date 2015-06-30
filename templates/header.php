<!doctype html>
<html lang="en-us">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $pageTitle." | Taylor T. Lee's Portfolio Site"; ?></title>
		<link rel="stylesheet" type="text/css" href="styles/css-reset.css">
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body class="<?php echo $pageClass; ?>">
		<div class="wrapper">
			<header>
				<div class="header-text">
					<a href="index.php">
						<h1>Taylor T. Lee</h1>
						<h2>Web Developer</h2>
					</a>
				</div>
				<nav>
					<button class="mobileMenu" id="showMobileMenu"><span>Menu</span><span class="burger"><span class="middle"></span></span></button>
					<ul>
						<li><a href="index.php" data-letters="HOME">Home</a></li>
						<li><a href="about.php#aboutMe" data-letters="ABOUT ME">About Me</a></li>
						<li><a href="projects.php" data-letters="PROJECTS">Projects</a></li>
						<li><a href="games.php" data-letters="GAMES">Games</a></li>
					</ul>
				</nav>
			</header>