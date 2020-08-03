<?php $customCSS="<link rel='stylesheet' href='css/styles.css'>"; ?>
<?php $customCSS="<link rel='stylesheet' href='css/override.css'>"; ?>

<?php include "inc/html-top.php";?>




<body class="list">

<nav class="navbar navbar-light">
<span class="navbar-brand mb-0 h1 text-white"> 
	
	Pursuing Web Development
	 
</span>
</nav>

	<nav class="navbar-expand-lg navbar-light pt-4 pr-3">
  <div class="collapse navbar-collapse" id="navbarNav">
  <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php" class="home">HOME</a></li>
      <li><a href="#" class="current">SHOWCASE</a></li>
    </ul>
  </div>
</nav>

	
		<main>
			<div class="container-fluid pl-4 pr-4">
			<h2 class="line">Our Group</h2>
				<div class="row pb-5 pt-3">
					<div class="col text-left">
					<img src="images/me.jpg" alt="leah selfie">
					</div>
					<div class="col-7 text-left">
					<h3>Leah Goodwin</h3>
								<p>Goal for Computer Science: To pursue a career in Front-End Web Development and Video Game Development.</p>
					</div>
					<div class="col">
					<a href="leah.php" class="leah">Leah's Page</a>
					</div>
				</div>
			

			<div class="row pb-5">
					<div class="col text-left">
					<img src="images/self.png" alt="evan selfie">
					</div>
					<div class="col-7 text-left">
					
					<h3>Evan Pollack</h3>
					<p>Goal for Computer Science: To have a job that incorporates, but isn't limited to, web development and computer science principles.</p>
					
					</div>
					<div class="col">
					<a href="evan.php" class="evan">Evan's Page</a>	
					</div>
				</div>

				<div class="row pb-5">
					<div class="col text-left">
					<img src="images/girl.png" alt="girl">
					</div>
					<div class="col-7 text-left ">
					<h3>Dan Zhang</h3>
					<p>Goal for Computer Science: To pursue a career in Front-End Web Development.</p>
					
					</div>
					<div class="col">
					<a href="dan.php" class="dan">Dan's Page</a>
					</div>
				</div>
			</div>
		</main>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Project 3 - Los Angeles
  </div>
  <!-- Copyright -->

		<?php include "inc/scripts.php"; ?>
	</body>

</html>