<?php ?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale=1.0" />
		<title>Combi Service Meeuwes - Fotoreportage</title>
		<link rel="stylesheet" href="css/bootstrap-slate.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="./resources/UberGallery.css" />
		<link rel="stylesheet" type="text/css" href="./resources/colorbox/1/colorbox.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script type="text/javascript" src="./resources/colorbox/jquery.colorbox.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("a[rel='colorbox']").colorbox({
					maxWidth : "90%",
					maxHeight : "90%",
					opacity : ".5"
				});
			});
		</script>
	</head>
	<body>

		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-th-list"></span> </a>
					<a href="#" class="brand">Combi Service Meeuwes</a>
					<div class="nav-collapse collapse">
						<ul class="nav pull-right">
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="projecten.php">Projecten</a>
							</li>
							<li class="active">
								<a href="fotoreportage.php">Fotoreportage</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="hero-unit">
			<h1>Combi Service Meeuwes<img align="right" src="./img/Logo.png" width=320/></h1>
			<br />
			<br />
			<br />
		</div>

		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<p>
						Hier komen alle foto's. Roep maar op wat voor manier.
					</p>
					<?php
						include_once ('./resources/UberGallery.php');
						$gallery = UberGallery::init() -> createGallery('./gallery');
 ?>
				</div>
			</div>
		</div>

		

	</body>

</html>