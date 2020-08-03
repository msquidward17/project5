<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Student Websites</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/override.css">
</head>
<body>
<?php
// connect to the database
include('inc/db_connect.php');

// get results from database
$result = mysqli_query($connection, "SELECT * FROM students");
?>

<nav class="navbar navbar-light">
<span class="navbar-brand mb-0 h1 text-white ml-5 pl-5"> 
	
	Student List
	 
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

<h2 class="line pl-5">Our Group</h2>
<?php
// loop through results of database query, displaying them in the table
while($row = mysqli_fetch_array( $result )) {
?>
<div class="container-fluid pl-4 pr-4 kim">
				<div class="row pb-4 pt-3">
					<div class="col text-left ml-4">
          <?php echo 'image goes here' ?>
					</div>

					<div class="col-7 text-left">
					<h3><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></h3>
					<p><?php echo $row['description']; ?></p>
					
					</div>

					<div class="col pt-4">
					<a href="db_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
					<a onclick="return confirm('Are you sure you want to delete?')" href="delete.php?id=46">Delete</a>
					<a href="evan.php" class="evan"><?php echo $row['link']; ?></a>
					</div>
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
  <div class="footer-copyright text-center py-3">Project 4 - Los Angeles
  </div>
  <!-- Copyright -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>