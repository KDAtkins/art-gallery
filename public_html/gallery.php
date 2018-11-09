<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en" id="gallery-page">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- External CSS -->
		<link rel="stylesheet" type="text/css" href="stylesheet/styles.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- Font Awesome CDN -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

		<title>Art Gallery - Gallery</title>
	</head>

	<!-- Body -->
	<body>
		<!-- Header-->
		<header>
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="index.php">Art Gallery</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="gallery.php">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="bio.php">Bio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<!-- Begin Page Content -->
		<main class="container">
			<div class="row" id="gallery">
				<h1 class="col-sm gallery-head">Gallery</h1>
			</div>
			<div class="form-group col-3">
				<label>Select Category</label>
				<select class="form-control mb-2">
					<option value="wood">Metal</option>
					<option value="steel">Steel</option>
					<option value="stone">Stone</option>
					<option value="wood">Wood</option>
				</select>
			</div>

			<?php
//			$displayImages = $dbh->prepare("SELECT imageName FROM image");
//			$displayImages->execute();

			$results = $dbh->query("SELECT * FROM image");
			var_dump($results->fetch_all());

			$category = "";

			$wood = $_POST["wood"];
			$steel = $_POST["steel"];
			$stone = $_POST["stone"];
			$metal = $_POST["metal"];

			if($category == $wood){

			} elseif($category == $steel){

			}elseif($category == $stone){

			}elseif($category == $metal){

			}
			
			?>

		</main>

		<!-- Footer -->
		<footer class="footer">
			<div class="container">
				<a href="#"><i class="fab fa-instagram fa-2x"></i></a>
				<a href="#"><i class="fab fa-facebook fa-2x"></i></a>
			</div>
		</footer>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>