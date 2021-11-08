<!DOCTYPE HTML>
<html lang="es">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Merking</title>
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

		.bg-success {
			transition: all 0.5s ease;
		}
	</style>
</head>

<body style="overflow-x: hidden;">
	<div style="height:0,5px">
		<!-- MENU -->
		<?php $categorias = Utils::showCategorias(); ?>
		<nav class="navbar navbar-expand-lg navbar-dark " id="menu">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div id='logo' class="mb-3">
				<a class="navbar-brand navbar-nav navbar-center" href="<?= base_url ?>">
					<img class="img-fluid" src="<?= base_url ?>assets/img/logo.png" alt="Logo" />
				</a>
			</div>


			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="font-size:20px">
					<li class="nav-item active font-weight-bold font-weight-bold">
						<a class="nav-link" href="<?= base_url ?>">Inicio</a>
					</li>
					<li class="nav-item active dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
							Categorias
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: white;">
							<?php while ($cat = $categorias->fetch_object()) : ?>
								<a class="dropdown-item" href="<?= base_url ?>categoria/ver&id=<?= $cat->id ?>"><?= $cat->nombre ?></a>
							<?php endwhile; ?>
						</div>
					</li>
				</ul>
			</div>
			<?php $stats = Utils::statsCarrito(); ?>
			<div class="dropdown my-2 my-lg-0">
				<a style="color: white;text-decoration:none" class="mr-sm-5" href="<?= base_url ?>carrito/index">
					<img class="img-carrito" src="<?= base_url ?>assets/img/carrito.png">
					<?= $stats['count'] ?>
				</a>
			</div>
		</nav>
	</div>
	<div class="container-fluid px-0">