<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php
include('renderform.php');

// connect to the database
include('db_connect.php');

// check if the form has been submitted. If it has, start to process the form and save it to the database
if (isset($_POST['submit'])) {
	// get form data, making sure it is valid
	$firstname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['firstname']));
	$lastname = mysqli_real_escape_string($connection, htmlspecialchars($_POST['lastname']));
	$description = mysqli_real_escape_string($connection, htmlspecialchars($_POST['description']));
	$img = mysqli_real_escape_string($connection, htmlspecialchars($_POST['img']));
	$link = mysqli_real_escape_string($connection, htmlspecialchars($_POST['link']));

	// check to make sure both fields are entered
	if ($firstname == '' || $lastname == '' || $description == '' || $img == '' || $link == '') {
		// generate error message
		$error = 'ERROR: Please fill in all required fields!';

		// if either field is blank, display the form again
		renderForm($id, $firstname, $lastname, $description, $img, $link, $error);

	} else {
		// save the data to the database
		$result = mysqli_query($connection, "INSERT INTO students (firstname, lastname, description, img, link) VALUES ('$firstname', '$lastname', '$description', '$img', '$link')");

		// once saved, redirect back to the view page
		header("Location: list.php");
	}
} else {
	// if the form hasn't been submitted, display the form
	renderForm('','','','','','','');
}
?>