<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Chicago Project 1 | Page 4</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/navbar.css">
		<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;family=Indie+Flower&amp;family=Pangolin&amp;family=Patrick+Hand&amp;family=Permanent+Marker&amp;display=swap" rel="stylesheet">

	</head>

	<body>
	<div class = "container">
		<div class="intro">
		<a href="index.php">
				<h1>Project 1 - Chicago</h1>
			</a>
			<hr>
		</div>
		<div class="content">
		<header class="nav">
			<?php include "inc/nav.php"; ?>
		</header>
		<main>
			<article>
				<header>
					<hgroup>
						<h2>Dan Zhang</h2>
						<h3>Technician</h3>
					</hgroup>
					<img src="images/girl.png" alt="girl"/>
				</header>
				<article>
					<h3>Intro</h3>
					<p>I am a Web Developer majoring in CS in Univeristy of Rochester. I am interested in Front-end Web Development. I have intern experience developing Front-end in React-redux, Next.js and back-end in node.js, feathers.js interacting with database from Mongoose, MongoDB.</p>
				</article>
				<hr>
				<article class="article part1">
					<header>
						<h3>Work Experience</h3>
					</header>
					<section>
						<hgroup>
							<h4>Full Stack Web Developer Intern</h4>
							<h5>May 2020 – Present FocusKPI, Boston</h5>
						</hgroup>
						<ul>
							<li>Developed a MERN stack website for recruiters to search for suitable candidates and contact them and candidates to upload resume and share experience
								<a href="http://loopwe.com/">(http://loopwe.com/)</a>
							</li>
							<li>Designed UI with Figma and implemented frontend utilizing React.js, Next.js, Semantic UI and personalized CSS</li>
							<li>Implemented backend with feathers.js to create RESTful API and connected with database</li>
							<li>Collaborated with data analyst from backend(python)</li>
							<li>Collaborated with the development team of the talent database project in an Agile environment</li>
						</ul>
					</section>
					<section>
						<hgroup>
							<h4>Front End Web Developer Intern</h4>
							<h5>May 2020 – Present SALT (Poziom Ventures Pvt Ltd), Remote</h5>
						</hgroup>
						<ul>
							<li>Built features of banking service with a mobile responsive design using MERN (MongoDB, Express, React, Node.js)</li>
							<li>Designeed and implementation of the overall web architecture</li>
							<li>Implemented backend with feathers.js to create RESTful API and connected with database</li>
							<li>Integrated our front-end UI with the constructed RESTful API from back end</li>
							<li>Created the front end of OTP(One Time Password) system and connected with backend and android server with socket.io and APIs</li>
							<li>Design and implementation of continuous integration and deployment</li>
						</ul>
					</section>
					<section>
						<hgroup>
							<h4>Web Developer</h4>
							<h5>Linguistic Department, University of Rochester Jan 2020 – May 2020</h5>
						</hgroup>
						<ul>
							<li>Constructed and migrated the website from Sandvox (template-based website creation tool) to a new website - Built Front-end using React.js with fixed header and footer components and different templates for main context</li>
							<li>Used python package beautiful soup for web scraping the routes for images, videos and audios and stored in the database</li>
							<li>Designed and built database with MySQL and connected with PHP</li>
							<li>Manipulated the database with MySQL module on Node.js</li>
						</ul>
					</section>
				</article>
				<hr>
				<article class="article part2">
					<header>
						<h3>Projects</h3>
					</header>
					<section>
						<hgroup>
							<h4>Tin Dog Practice Website</h4>
							<h5>Dec. 2019</h5>
						</hgroup>
						<ul>
							<li>Front-end design with <strong>HTML and CSS</strong></li>
							<li>Utilize <strong>Bootstrap</strong> for basic styling</li>
							<li>html file provided by <a href="https://github.com/londonappbrewery/TinDog-Start">https://github.com/londonappbrewery/TinDog-Start</a></li>
						</ul>
					</section>
					<section>
						<hgroup>
							<h4>Simon Game</h4>
							<h5>Dec. 2019</h5>
						</hgroup>
						<ul>
							<li>Front-end design with <strong>HTML and CSS</strong></li>
							<li><strong>jQuery</strong> for DOM selection and control of event handler</li>
						</ul>
					</section>
					<section>
						<hgroup>
							<h4>CHATTO (Real-time translation web-based app)</h4>
							<h5>Oct. 2019</h5>
						</hgroup>
						<ul>
							<li>Design front-end with <strong>Adobe XD</strong> and realize with <strong>HTML and CSS</strong></li>
							<li>Create the main server with <strong>Express.js</strong> and connect the server with users with <strong>socket.io</strong></li>
							<li>Recognize the language of input with <strong>Google language API</strong> and translate the language in real time with <strong>Google translation API</strong></li>
						</ul>
					</section>
					<section>
						<hgroup>
							<h4>Memory Game</h4>
							<h5>May. 2019</h5>
						</hgroup>
						<ul>
							<li>Utilize <strong>HTML, CSS and JavaScript </strong>to build a basic memory game</li>
							<li>Structure the UI with <strong>CSS</strong></li>
							<li>Use <strong>DOM</strong>to control each section of the game and set the <strong>Event-Listeners</strong></li>
						</ul>
					</section>
					<section>
						<hgroup>
							<h4>Classic Arcade Game</h4>
							<h5>May. 2019</h5>
						</hgroup>
						<ul>
							<li>Utilize <strong>HTML, CSS and JavaScript </strong>to build a clone of classic arcade game</li>
							<li>Use Class Inheritance to create different object of enemy and player with <strong>Object-Oriented </strong>principle</li>
							<li>Add <strong>Event-Listener</strong> in JavaScript to let users control with keys and use <strong>DOM</strong> to control each section</li>
						</ul>
					</section>
					<section>
						<hgroup>
							<h4>Easy-submit (web-based app for crop homework and download)</h4>
							<h5>Dec. 2019</h5>
						</hgroup>
						<ul>
							<li>UI design with <strong>CSS</strong> and structure the app with <strong>React</strong></li>
							<li>Import npm packages such as <strong>{download}</strong> for downloading, <strong>{ReactCrop}</strong> for cropping uploaded image</li>
							<li>Self- created React components such as {Previews} for image preview and {ToolBar} for editing</li>
							<li>Used for students to submit cropped homework pictures more convenient on websites such as Gradescope</li>
						</ul>
					</section>
				</article>
		</main>
		<footer>
			<p>Project 1 - Chicago</p>
		</footer>
		</div>
		</div> 
		<?php include "inc/scripts.php"; ?>
	</body>
</html>