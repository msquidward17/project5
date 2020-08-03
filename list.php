<?php $customCSS="<link rel='stylesheet' href='css/styles.css'>"; ?>
<?php $customCSS="<link rel='stylesheet' href='css/override.css'>"; ?>

<?php include "inc/html-top.php";?>




<body class="list">

<nav class="navbar navbar-light bg-light">
<span class="navbar-brand mb-0 h1 mx-auto"> 
	<a href="index.php">
	<h1>Pursuing Web Development </h1>
	</a>  
</span>
</nav>

	<nav class="navbar-right navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Showcase <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
  
    </ul>
  </div>
</nav>
		<main>
			<div class="container-fluid">
			<h2>Our Group</h2>
			<div class="row">
					<div class="col">
					<img src="images/me.jpg" alt="leah selfie">
					</div>
					<div class="col">
					<h3>Leah Goodwin</h3>
								<p>Goal for Computer Science: To pursue a career in Front-End Web Development and Video Game Development.</p>
					</div>
					<div class="col">
					<a href="leah.php" class="leah">Leah's Page</a>
					</div>
				</div>
			

			<div class="row">
					<div class="col">
					<img src="images/self.png" alt="evan selfie">
					</div>
					<div class="col">
					
					<h3>Evan Pollack</h3>
					<p>Goal for Computer Science: To have a job that incorporates, but isn't limited to, web development and computer science principles.</p>
					
					</div>
					<div class="col">
					<a href="evan.php" class="evan">Evan's Page</a>	
					</div>
				</div>
				<div class="row">
					<div class="col">
					<img src="images/girl.png" alt="girl">
					</div>
					<div class="col">
					<h3>Dan Zhang</h3>
					<p>Goal for Computer Science: To pursue a career in Front-End Web Development.</p>
					
					</div>
					<div class="col">
					<a href="dan.php" class="dan">Dan's Page</a>
					</div>
				</div>
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