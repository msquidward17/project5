<?php session_start(); ?>
<?php $customCSS="<link rel='stylesheet' href='css/index-styles.css'>"; ?>

<?php include "inc/html-top.php";?>

	<body>
		<header class="static">
			<div class="container">
				<div>
					<h1>Pursuing Web Development</h1>
					<div class="subtitle"> Learn about aspiring web developers and see what it takes to become one </div>
				</div>
				<div id="login" class="terminal" >
				<?php if(isset($_SESSION['username'])) { ?>
					<a href="logout.php">Logout of your User Account</a>
          <a href="reset-password.php">Reset your password</a>
					<?php } else { ?>
					<a href="login.php">Login to your User Account</a>
				<?php } ?>
				

				<?php if(isset($_SESSION['username'])) { ?>
				<a href="db_new.php">Add a new record</a>
				<?php } ?>
				</div>
			</div>

		</header>

		<section class="center">
			<div class="container">
				<div>
					<h2>Your Adventure Awaits!</h2>
					<h3>Front End Web Development 2020</h3>
				</div>
			</div>
		</section>


		<footer class="static">
			<div class="container">
				<ul class="weak-fallow">
					<li> <div> $78,279 </div> Average Web Developer Job Salary, according to Indeed.com </li>
					<li> <div> #3 </div> Best Technology Jobs, according to U.S. News </li>
					<li> <div> 27% </div> Job Growth for Web Developers by 2024 </li>
				</ul>

				<div class="terminal"> <a href="list.php"> See Our Students </a> </div>
				<!-- <button onclick = "window.location.href='list.php'">
					Start Learning
				</button> -->
			</div>
		</footer>
	</body>
</html>
