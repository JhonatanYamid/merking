<!DOCTYPE HTML>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>SuperOfertas</title>
	<link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css" />
	<link rel="stylesheet" href="<?= base_url ?>assets/bootstrap/dist/css/bootstrap.min.css" />
	<script src="<?= base_url ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url ?>helpers/main.js"></script>
	<script src="<?= base_url ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
	<style>
		.navbar-nav.navbar-center {
			position: absolute;
			left: 50%;
			transform: translatex(-50%);
		}

		#logo img {
			height: 75px;
		}
	</style>
</head>

<body>
	<div style="background-image:url('<?= base_url ?>assets/img/jumbotron2.png'); background-size: 100% auto;  height:35em" >
		<!-- MENU -->
		<?php $categorias = Utils::showCategorias(); ?>
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="opacity:0.4!important;">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id='logo' class="mb-3">
				<a class="navbar-brand navbar-nav navbar-center" href="#">
					<img class="img-fluid" src="<?= base_url ?>assets/img/logo.png" alt="Logo" />
				</a>
			</div>


			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
	</div>
	<div class="container">