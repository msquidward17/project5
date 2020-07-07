<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Chicago Project 1 | Home</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/navbar.css">
		<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Indie+Flower&amp;family=Pangolin&amp;family=Patrick+Hand&amp;family=Permanent+Marker&amp;display=swap" rel="stylesheet">
	</head>
	<body>
		<div class = "container">
			<header class="intro">
				<a href="index.php">
					<h1>Project 1 - Chicago</h1>
				</a>
				<?php include "inc/nav.php"; ?>
			</header>
			<main>
				<article class="article part1">
					<header id="part1-header">
						<hgroup>
							<h2>Michael Bashner</h2>
							<h3>Information Architect</h3>
						</hgroup>
						<img src="images/michael-selfie.jpg" alt="Michael Selfie">
					</header>
					<p>Hi, my name is Michael (he/him). I am a computer science major, a linguistics minor, and I have a cluster in gender, sexuality, and women's studies. The clubs I am a part of are Off Broadway on Campus (OBOC) and No Jackets Required (NJR). I am the Open Mic and Jam Night Coordinator on the executive board of  NJR. I have some basic experience with writing since I took a short story class in high school, and completed the required undergraduate first year writing course (WRT105). I have a good amount of programming skills. Prior CSC courses: 170, 171, 172, 173, 242, 247, 250.</p>
					<footer>
						<a href="michael.php" class="michael">Michael's Website</a>
					</footer>
				</article>
				<article class="article part2">
					<header>
						<hgroup>
							<h2>Eunlim Kim</h2>
							<h3>Visual Designer</h3>
						</hgroup>
						<img src="images/eunlimkim.jpg" alt="eunlim selfie"/>
					</header>
					<p>University of Rochester</p>
					<P>Major : BA Computer Science</P>
					<p>Class of 2021</p>
					<p>Hello. I am Eunlim Kim and this is my webpage! This webpage is made for CSC174 and looks very interesting! Hope you have a great day!</p>
					<footer>
						<a href="eunlim.php" class="eunlim">Eunlim's Website</a>
					</footer>
				</article>
				<article class="article part3">
					<header>
						<hgroup>
							<h2>Dan Zhang</h2>
							<h3>Technician</h3>
						</hgroup>
						<img src="images/girl.png" alt="girl"/>
					</header>
					<p>I am a Web Developer majoring in CS in Univeristy of Rochester. I am interested in Front-end Web Development. I have intern experience developing Front-end in React-redux, Next.js and back-end in node.js, feathers.js interacting with database from Mongoose, MongoDB.</p>
					<footer>
						<a href="dan.php" class="dan">Dan's Website</a>
					</footer>
				</article>
			</main>
			<footer>
				<p>Project 1 - Chicago</p>
			</footer>
		</div>
		<?php include "inc/scripts.php"; ?>
	</body>
</html>