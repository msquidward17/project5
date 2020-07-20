<?php $customCSS="<link rel='stylesheet' href='css/styles.css'>"; ?>
<?php include "inc/html-top.php";?>

	<body class = "student-page">
		<header class="static">
			<div class="container">
					<h1>Dan Zhang</h1>
			</div>
		</header>
		<nav id="cssmenu">
			<div class="container">
	            <ul>
	                <li class="active"><a href = "#">Dan</a></li>
	                <li><a href="list.php">Showcase</a></li>
	                <li><a href="index.php">Home</a></li>
	            </ul>
	        </div>
        </nav>

		<main>
				<article class = "gcontainer glayout">
					<section class = "intro boxy">
						<img class = "propic" src="images/girl.png" alt="dan">
						<p>I am a Web Developer majoring in CS at the Univeristy of Rochester. I am interested in Front-end Web Development. I have intern experience developing Front-end in React-redux, Next.js and back-end in node.js, feathers.js, interacting with database from Mongoose, MongoDB.</p>
					</section>

					<section class = "elife boxy">
						<h2>Early Life</h2>
						<p>I was born in Shanghai,China. I have been living in Shanghai for the first 18 years of my life. And then my dad decided to send me abroad to broaden my horizon. So he sent me to an international high school in China and then I came to the US. I did not really like SAT and TOEFL but I spent a great amount of time making my essay interesting. And that essay is how I got into Rochester and I like the snow in Rochester a lot! (Although many people might not agree with me, Rochester is very pretty in my mind).</p>

					</section>

					<section class = "courses boxy">
						<h2>Relevant CS Coursework</h2>
						<ul>
							<li>CSC 170: Intro to Web Development</li>
							<li>CSC 171: Intro to Computing Science</li>
							<li>CSC 172: Data Structures and Algorithms</li>
							<li>CSC 212: Human Computer Interaction</li>
							<li>CSC 261: Intro to Database</li>
							<li>CSC 299W: Social Impication of Computer Science</li>
						</ul>
					</section>

					<section class = "extrac boxy">
						<h2>Extracurricular Activities</h2>
						<ul>
							<li>Note taking for disability resources (2019 - Present)</li>
							<li>Volunteer Web Design/Developer (2019 - Present)</li>
						</ul>
					</section>
				</article>
		</main>

		<footer class = "foo">
			<div class="container">
				<a href="http://csc174.org/lab01/dzhang29/" target = "_blank" class="dan">Dan's Original Lab 1</a>
			</div>
		</footer>

		<?php include "inc/scripts.php"; ?>

	</body>

</html>