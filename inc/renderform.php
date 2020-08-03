<?php
// creates the edit record form
function renderForm($id, $firstname, $lastname, $description, $img, $link, $error) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Student list</title>
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
										<input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>"  placeholder="First Name"><br>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>" placeholder="Last Name"><br>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
								<input type="file" id="img" name="img" value="<?php echo $img; ?>"><br>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<input type="text" id="description" name="description" value="<?php echo $description; ?>" placeholder="Description"><br>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<input type="texlinkt" id="link" name="link" value="<?php echo $link; ?>" placeholder="Link"><br>
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" name="submit" value="Submit" class="btn btn-info btn-block">
			    		    <div id="formFooter">
     						 <a class="underlineHover" href="db_view.php">Cancel</a>
   							 </div>
			    		</form>
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
