<?php session_start(); ?>
<?php $customCSS="<link rel='stylesheet' href='css/styles.css'>"; ?>
<?php include "inc/html-top.php";?>

	<body class="list">
<?php
	// connect to the database
	include('db_connect.php');

	// get results from database
	$result = mysqli_query($connection, "SELECT * FROM students");
?>
		<header>
			<div class="containerh">
				<a href="index.php">
					<h1>Pursuing Web Development </h1>
				</a>
				<div class="login terminal">
					<?php if(isset($_SESSION['username'])) { ?>
					<a href="logout.php">Logout</a>
		      <a href="reset-password.php">Reset your password</a>
					<?php } else { ?>
					<a href="login.php">Log in</a>
					<?php } ?>
				</div>
			</div>
		</header>




		<nav id="cssmenu">
			<div class="containerh">
				<ul>
					<li class="current"> Showcase </li>
					<li><a href = "index.php" > Home </a></li>
				</ul>

			<div class="terminal login" id="adder">
					<?php if(isset($_SESSION['username'])) { ?>
					<a href="db_new.php"  >Add New Student</a>
					<?php } ?>
			</div>
			</div>
		</nav>

		<main>
			<div class="container">


				<article>
					<h2>Our Students</h2>

<?php
	// loop through results of database query, displaying them in the table
	while($row = mysqli_fetch_array( $result )) {
?>
					<section class="article part1">
						<div>
						
							<img src="<?php echo $row['img']; ?>" alt="image for <?php echo $row['firstname']; ?>" width="200" height="200">
							

							<div class="goal">
								<h3><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></h3>

								<p><?php echo $row['description']; ?></p>
							</div>
						</div>

							<div class="links">
								<a href="<?php echo $row['link']; ?>" class="page-link" target="_blank">Visit <?php echo $row['firstname']; ?>'s Page</a>
								<?php if(isset($_SESSION['username'])) { ?>
									<a href="db_edit.php?id=<?php echo $row['id']; ?>" class="db-link edit">Edit</a>
									<a href="db_delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete: <?php echo $row['firstname']; ?>?')" class="db-link delete">Delete</a>
								<?php } ?>
							</div>
					</section>
<?php
	// close the loop
	}
?>
				</article>

			</div>
		</main>

		<footer>
			<div class="container">
				<p>Project 5 - Los Angeles</p>
			</div>
		</footer>

		<?php include "inc/scripts.php"; ?>
	</body>

</html>
