<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Home | LA Project 2</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Indie+Flower&amp;family=Pangolin&amp;family=Patrick+Hand&amp;family=Permanent+Marker&amp;display=swap" rel="stylesheet">
</head>
<body class="container">
	<header class="intro">
		<a href="index.php">
			<h1>Project 2 - Los Angeles</h1>
		</a>
	</header>

	<?php include "inc/nav.php"; ?>

	<main>
	    <article>
	        <h2>Our Group</h2>

		    <section class="article part1">
			    <h3>Leah Goodwin</h3>

			    <img src="images/me.jpg" alt="leah selfie">

		        <p>Goal for Computer Science: </p>

		        <div>
		            <a href="leah.php" class="leah">Leah's Page</a>

                    <a href="http://csc174.org/lab01/lgoodwi3/" class="leah">Leah's Lab 1</a>
		        </div>
			</section>

			<section class="article part2">
			    <h3>Evan Pollack</h3>

				<img src="images/self.jpg" alt="evan selfie">

				<p>Goal for Computer Science: to have a job that incorporates, but isn't limited to, web development and
				    computer science principles</p>

				<div>
				    <a href="evan.php" class="evan">Evan's Page</a>

                    <a href="http://csc174.org/lab01/epollack/" class="evan">Evan's Lab 1</a>
				</div>
			</section>

			<section class="article part3">
				<h3>Dan Zhang</h3>

				<img src="images/girl.png" alt="girl">

				<p>Goal for Computer Science: </p>

				<div>
				    <a href="dan.php" class="dan">Dan's Page</a>

                    <a href="http://csc174.org/lab01/dzhang29/" class="dan">Dan's Lab 1</a>
				</div>
			</section>
		</article>
	</main>

	<footer>
		<p>Project 2 - Los Angeles</p>
	</footer>

	<?php include "inc/scripts.php"; ?>
</body>
</html>