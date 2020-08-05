<?php $customCSS="<link rel='stylesheet' href='css/styles.css'>"; ?>
<?php $use_bootstrap=true; ?>

<?php include "inc/html-top.php";?>

	<body>
<?php
	// connect to the database
	include('db_connect.php');
	
	// get results from database
	$result = mysqli_query($connection, "SELECT * FROM students");
?>

		<nav class="navbar navbar-light">
			<span class="navbar-brand mb-0 h1 text-white ml-5 pl-5"> 
				Pursuing Web Development
			</span>
		</nav>
		
		<nav class="navbar-expand-lg navbar-light pt-4 pr-3 mr-5 pr-5">
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" class="home">HOME</a></li>
					<li><a href="#" class="current">SHOWCASE</a></li>
				</ul>
			</div>
		</nav>
		
		<main>
			<div class="container-fluid pl-4 pr-4 kim">
				<h2 class="line">Our Group</h2>
				
<?php
	// loop through results of database query, displaying them in the table
	while($row = mysqli_fetch_array( $result )) {
?>
				<div class="row pb-4 pt-3">
					<div class="col text-left ml-4">
						<img src="<?php echo $row['img']; ?>" alt="image for <?php echo $row['firstname']; ?>">
					</div>
					
					<div class="col-7 text-left">
						<h3><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></h3>
						<p><?php echo $row['description']; ?></p>
					</div>
					
					<div class="col pt-4">
						<a href="db_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
						<a onclick="return confirm('Are you sure you want to delete: <?php echo $row['firstname']; ?>?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
						<a href="<?php echo $row['link']; ?>.php" class="page-link"><?php echo $row['firstname']; ?>'s Page</a>
					</div>
				</div>
<?php
	// close the loop
	}
?>
				<div class="row pb-5 mb-5 d-flex justify-content-center">
					<a class="dan" href="db_new.php">Add New Student</a>
				</div>
			</div>
		</main>

<!-- Footer -->
		<footer class="page-footer font-small blue footer fixed-bottom footer-light footer-shadow">

			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">
				Project 4 - Los Angeles
			</div>
			<!-- Copyright -->
		</footer>
		
<?php include "inc/scripts.php"; ?>
<?php
	mysqli_free_result($result);
	mysqli_close($connection);
?>
	</body>
</html>
