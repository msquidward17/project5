<?php session_start(); ?>
<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $description, $img, $link, $error) {
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>LA Project 5</title>
		
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<link rel="stylesheet" href="css/add_student.css">
	</head>
	<body>
<?php
// if there are any errors, display them
if ($error != '') {
	echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>

		<div class="container">
			<div class="row centered-form">
				<div class="add-form">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Add New Student</h3>
						</div>
						<div class="panel-body">
							<form action="" method="post">
								<input type="hidden" name="id" value="<?php echo $id; ?>">
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<label for="firstname">First Name*</label><input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>"><br>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<label for="lastname">Last Name*</label><input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>"><br>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<div>
												<label for="img">Image (in the form of a link)*</label>
											</div>
											
											<img src="<?php echo $img; ?>" alt="current image link is broken or missing" class="img-thumbnail"><br>
											<input type="url" id="img" name="img" value="<?php echo $img; ?>"><br>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<label for="description">Description*</label><input type="text" id="description" name="description" value="<?php echo $description; ?>"><br>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="form-group">
											<label for="link">Link*</label><input type="url" id="link" name="link" value="<?php echo $link; ?>"><br>
										</div>
									</div>
								</div>
								* field is required
								<input type="submit" name="submit" value="Submit" class="btn btn-info btn-block">
								<div id="formFooter">
									<a class="underlineHover" href="list.php">Cancel</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
</html>
<?php
}
?>

