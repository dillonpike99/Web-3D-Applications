<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php include_once("imports.php"); ?>

		<title id="title">Drinks</title>
	</head>
	<body>
		<?php include_once("nav.php"); ?>
		<div class="container container-fluid main_contents">
			<div class="row">
				<div class="col-sm-9">
					<div class="row">
						<div class="card">
							<div class="card-body">
								<div class="btn-group d-flex">
									<a type="button" class="btn btn-danger btn-lg flex-fill" onclick="drinkSwap('coca_cola')">Coca Cola</a>
									<a type="button" class="btn btn-success btn-lg flex-fill" onclick="drinkSwap('sprite')">Sprite</a>
									<a type="button" class="btn btn-light btn-lg flex-fill" onclick="drinkSwap('dr_pepper')">Dr Pepper</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<?php for ($i=0; $i < count($data["drinksData"]); $i++){ ?>
							<div class="card" id="<?php echo substr($data["drinksData"][$i]["model"], 0, -4) ?>-card">
								<div class="card-body">
									<div class="card-title">
										<h3><?php echo $data["drinksData"][$i]["modelTitle"] ?></h3>
									</div>
									<div class="model3D">
										<x3d id="<?php echo substr($data["drinksData"][$i]["model"], 0, -4) ?>-model">
											<scene>
												<inline nameSpaceName="<?php echo substr($data["drinksData"][$i]["model"], 0, -4) ?>" mapDEFToID="true" url="../assets/x3d/<?php echo $data["drinksData"][$i]["model"] ?>"></inline>
											</scene>
										</x3d>
									</div>
									<div class="card-text">
										<p><?php echo $data["drinksData"][$i]["creationMethod"] ?></p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title">
										<h5><?php echo $data["miscData"][1]["title"] ?></h5>
									</div>
									<div class="card-text">
										<p><?php echo $data["miscData"][1]["description"] ?></p>
									</div>
									<button type="button" onclick="frontCamera(getDrink())" class="btn btn-primary btn-sm my-1">Front</button>
									<button type="button" onclick="backCamera(getDrink())" class="btn btn-primary btn-sm my-1">Back</button>
									<button type="button" onclick="leftCamera(getDrink())" class="btn btn-primary btn-sm my-1">Left</button>
									<button type="button" onclick="rightCamera(getDrink())" class="btn btn-primary btn-sm my-1">Right</button>
									<button type="button" onclick="topCamera(getDrink())" class="btn btn-primary btn-sm my-1">Top</button>
									<button type="button" onclick="bottomCamera(getDrink())" class="btn btn-primary btn-sm my-1">Bottom</button>
									<button type="button" onclick="rotate(getDrink())" class="btn btn-primary btn-sm my-1">Rotate</button>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title">
										<h5><?php echo $data["miscData"][2]["title"] ?></h5>
									</div>
									<div class="card-text">
										<p><?php echo $data["miscData"][2]["description"] ?></p>
									</div>
									<button type="button" onclick="toggleSpotlight(getDrink())" class="btn btn-primary btn-sm my-1">Spotlight</button>
									<button type="button" onclick="toggleToplight(getDrink())" class="btn btn-primary btn-sm my-1">Top Light</button>
									<button type="button" onclick="toggleHeadlight(getDrink())" class="btn btn-primary btn-sm my-1">Headlight</button>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title">
										<h5><?php echo $data["miscData"][3]["title"] ?></h5>
									</div>
									<div class="card-text">
										<p><?php echo $data["miscData"][3]["description"] ?></p>
									</div>
									<button type="button" onclick="modelNormal(getDrink())" class="btn btn-primary btn-sm my-1">Normal</button>
									<button type="button" onclick="modelWireframe(getDrink())" class="btn btn-primary btn-sm my-1">Wireframe</button>
									<button type="button" onclick="modelDots(getDrink())" class="btn btn-primary btn-sm my-1">Dots</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h3 class="d-flex justify-content-center"><?php echo $data["miscData"][0]["title"] ?></h3>
							</div>
							<?php for ($i=0; $i < count($data["galleryData"]); $i++){ ?>
								<a href="../assets/images/gallery/<?php echo $data["galleryData"][$i]["image"] ?>" data-fancybox="gallery">
									<img src="../assets/images/gallery/<?php echo $data["galleryData"][$i]["image"] ?>" class="card-img gallery-image" alt="<?php echo $data["galleryData"][$i]["name"] ?>">
								</a>
							<?php } ?>
							<div class="card-text">
								<p><?php echo $data["miscData"][0]["description"] ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<?php for ($i=0; $i < count($data["drinksData"]); $i++){ ?>
						<div class="card" id="<?php echo substr($data["drinksData"][$i]["model"], 0, -4) ?>-history">
							<div class="card-body">
								<div class="card-title">
									<h3><?php echo $data["drinksData"][$i]["title"] ?></h3>
								</div>
								<h5><?php echo $data["drinksData"][$i]["subTitle"] ?></h5>
								<div class="card-text">
									<p><?php echo $data["drinksData"][$i]["description"] ?></p>
								</div>
								<a href="<?php echo $data["drinksData"][$i]["url"] ?>" class="btn btn-primary">Find out more ...</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<?php include_once("footer.php"); ?>

		<script src="../js/model_buttons.js"></script>
		<script>
			drinkSwap("<?php
				if(array_key_exists("d", $_GET)) {
					echo $_GET["d"];
				} else {
					echo "coca_cola";
				} ?>");
		</script>
	</body>
</html>