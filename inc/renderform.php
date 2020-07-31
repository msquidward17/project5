<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $description, $img, $link, $error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Phone list</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="css/override.css">
</head>
<body>
<?php
// if there are any errors, display them
if ($error != '') {
	echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>
<div>
<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<label for="firstname">First Name: *</label> <input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>"/><br>
	<label for="lastname">Last Name: *</label> <input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>"/><br>
	<label for="description">Description: *</label> <input type="text" id="description" name="description" value="<?php echo $description; ?>"/><br>
	<label for="img">Image: *</label> <input type="file" id="img" name="img" value="<?php echo $img; ?>"/><br>
	<label for="link">Link: *</label> <input type="texlinkt" id="link" name="link" value="<?php echo $link; ?>"/><br>
	<div>* required</div>
	<input type="submit" name="submit" value="Submit">
</form>
</div>

<div>
	<br>
	<a href="db_view.php">Cancel</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
?>