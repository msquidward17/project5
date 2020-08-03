<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title>LA Project 4</title>
	
<?php
	//add bootstrap styling & override styling if enabled (should only be used for newly-created pages)
	if ($use_bootstrap) {
?>
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
	<link rel='stylesheet' href='css/override.css'>
<?php
	}
?>
    <?php echo $customCSS; ?>
</head>