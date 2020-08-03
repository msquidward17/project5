<?php $customCSS="<link rel='stylesheet' href='css/styles.css'>"; ?>
<?php $customCSS="<link rel='stylesheet' href='css/override.css'>"; ?>

<?php include "inc/html-top.php";?>




<body>
<?php
// connect to the database
include('inc/db_connect.php');

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
				<div class="row pb-4 pt-3">
					<div class="col text-left ml-4">
					<img src="images/me.jpg" alt="leah selfie">
					</div>

					<div class="col-7 text-left">
					<h3>Leah Goodwin</h3>
								<p>Goal for Computer Science: To pursue a career in Front-End Web Development and Video Game Development.</p>
					</div>
					
					<div class="col pt-4">
					<a href="db_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
					<a onclick="return confirm('Are you sure you want to delete: Leah?')" href="delete.php?id=46">Delete</a>
					<a href="leah.php" class="leah">Leah's Page</a>
					</div>
				</div>
			

			<div class="row pb-4">
					<div class="col text-left ml-4">
					<img src="images/self.png" alt="evan selfie">
					</div>
					<div class="col-7 text-left">
					
					<h3>Evan Pollack</h3>
					<p>Goal for Computer Science: To have a job that incorporates, but isn't limited to, web development and computer science principles.</p>
					
					</div>
					<div class="col pt-4">
					<a href="db_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
					<a onclick="return confirm('Are you sure you want to delete: Evan?')" href="delete.php?id=46">Delete</a>
					<a href="evan.php" class="evan">Evan's Page</a>
					</div>
				</div>

				<div class="row pb-4">
					<div class="col text-left ml-4">
					<img src="images/girl.png" alt="girl">
					</div>
					<div class="col-7 text-left ">
					<h3>Dan Zhang</h3>
					<p>Goal for Computer Science: To pursue a career in Front-End Web Development.</p>
					
					</div>
					<div class="col pt-4">
					<a href="db_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
					<a onclick="return confirm('Are you sure you want to delete: Dan?')" href="delete.php?id=46">Delete</a>
					<a href="dan.php" class="dan">Dan's Page</a>
					</div>

					</div>
				<div class="row pb-5 mb-5 d-flex justify-content-center">
				<a class="dan" href="db_new.php">Add New Student</a>
				</div>
			</div>
		</main>

<!-- Footer -->
<footer class="page-footer font-small blue footer fixed-bottom footer-light footer-shadow">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">Project 4 - Los Angeles
  </div>
  <!-- Copyright -->

		<?php include "inc/scripts.php"; ?>
		<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>
	</body>

</html>