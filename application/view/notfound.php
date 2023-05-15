<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include_once("imports.php"); ?>

		<title><?php echo $data[0]["title"] ?></title>
	</head>
	<body>
		<?php include_once("nav.php"); ?>

		<div class="container text-center py-5 not-found">
		    <h1 class="display-1">404 Not Found</h1>
		  
		    <p class="lead">How did you end up here?</p>
		  
		    <p>The page you were looking for could not be found.</p>
		  
		    <a href="home" class="btn btn-primary mt-3">Go back to homepage</a>
		</div>

		<?php include_once("footer.php"); ?>

	</body>
</html>