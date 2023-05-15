<!-- https://users.sussex.ac.uk/~dp396/3dapp/assignment/index.php -->

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

		<div class="container container-fluid main_contents">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h2><?php echo $data[0]["title"] ?></h2>
							</div>
							<h3><?php echo $data[0]["subTitle"] ?></h3>
							<div class="card-text">
								<p><?php echo $data[0]["description"] ?></p>
							</div>
						</div>
						<img src="../assets/images/<?php echo $data[0]["image"] ?>" class="card-img-bottom" alt="<?php echo $data[0]["title"] ?>">
					</div>
				</div>
			</div>

			<div class="row">
				<?php for ($i=1; $i < 4; $i++){ ?>
					<div class="col-sm-4">
						<div class="card">
							<a href="<?php echo $data[$i]["modelhref"] ?>">
								<img class="card-img-top img-fluid" src="../assets/images/<?php echo $data[$i]["image"] ?>" alt="<?php echo $data[$i]["title"] ?>">
							</a>
							<div class="card-body">
								<div class="card-title">
									<h3><?php echo $data[$i]["title"] ?></h3>
								</div>
								<h5><?php echo $data[$i]["subTitle"] ?></h5>
								<div class="card-text">
									<p><?php echo $data[$i]["description"] ?></p>
								</div>
								<a href="<?php echo $data[$i]["url"] ?>" class="btn btn-primary my-1">Find out more ...</a>
								<a href="<?php echo $data[$i]["modelhref"] ?>" class="btn btn-primary my-1">View our model!</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>

		<?php include_once("footer.php"); ?>

	</body>
</html>