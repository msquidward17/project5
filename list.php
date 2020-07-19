<?php $customCSS="<link rel='stylesheet' href='css/styles.css'>"; ?>
<?php include "inc/html-top.php";?>

	<body>
		<header class="intro">
			<div class="container">
				<a href="index.php">
					<h1>Project 3 - Los Angeles</h1>
				</a>
			</div>
		</header>

		<nav id="cssmenu">
			<div class="container">
				<ul>	
					<li class="active"><a href = "#">Showcase</a></li>
					<li><a href = "index.php" > Home </a></li>
				</ul>
			</div>
		</nav>

		<main>
			<div class="container">
				

				<article>
					<h2>Our Group</h2>

					<section class="article part1">
						<div class="left-flex">
							<img src="images/me.jpg" alt="leah selfie">
							<div class="goal">
								<h3>Leah Goodwin</h3>
								<p>Goal for Computer Science: To pursue a career in
								Front-End Web Development and Video Game Development. </p>
							</div>
						</div>

							<div class="links">
								<a href="leah.php" class="leah">Leah's Page</a>

								<a href="http://csc174.org/lab01/lgoodwi3/" class="leah">Leah's Lab 1</a>
							</div>
					</section>

					<section class="article part2">
						<div class="left-flex">
							<img src="images/self.jpg" alt="evan selfie">
							<div class='goal'>
								<h3>Evan Pollack</h3>
								<p>Goal for Computer Science: To have a job that incorporates, but isn't limited to, web development and
								computer science principles.</p>
							</div>
						</div>
							<div class="links">
								<a href="evan.php" class="evan">Evan's Page</a>

								<a href="http://csc174.org/lab01/epollack/" class="evan">Evan's Lab 1</a>
							</div>
					</section>

					<section class="article part3">
						<div class="left-flex">
							<img src="images/girl.png" alt="girl">
							<div class='goal'>
								<h3>Dan Zhang</h3>
								<p>Goal for Computer Science: To pursue a career in Front-End Web Development. </p>
							</div>
						</div>
							<div class="links">
								<a href="dan.php" class="dan">Dan's Page</a>

								<a href="http://csc174.org/lab01/dzhang29/" class="dan">Dan's Lab 1</a>
							</div>
					</section>
				</article>
			</div>
		</main>

		<footer>
			<div class="container">
				<p>Project 3 - Los Angeles</p>
			</div>
		</footer>

		<?php include "inc/scripts.php"; ?>
	</body>

</html>