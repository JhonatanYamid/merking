<img class="img-fluid" src="<?= base_url ?>assets/img/banner 3.png" alt="banner">
<div class="row" style="background-color:#ebebe7">
	<img class="img-fluid" src="<?= base_url ?>assets/img/banner2.png" alt="banner">
	<div class="col-sm-12 px-5 pb-4">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" style="border-radius: 20px;">
				<div class="carousel-item active">
					<img class="d-block w-100 d-block" src="<?= base_url ?>assets/img/slide1.png" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 h-auto d-block" src="<?= base_url ?>assets/img/slide2.png" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 d-block" src="<?= base_url ?>assets/img/slide3.png" alt="Third slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 d-block" src="<?= base_url ?>assets/img/slide4.png" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="col-12 d-sm-none">
		<hr class="mt-4" style="width: 75%;margin-left: auto;
  margin-right: auto;">
		<h3 class="mt-5 mb-1 font-weight-bold text-center">Destacados</h3>
	</div>
	<div class="col-12 px-5 py-4">
		<div class="row">
			<?php
			$count = 0;
			while ($product = $productos->fetch_object()) :
			?>
				<div class="col-sm-4">
					<div class="card m-2">
						<img id="myImg" class="card-img-top" src="<?= $product->imagen ?>" onclick=abrir(this) alt="Card image cap">
						<div id="myModal" class="modal">
							<span class="close">&times;</span>
							<img class="modal-content" id="img01">
						</div>
						<div class="card-body">

							<div class="card-text" style="height:100px">
								<h3><?= '$ ' . number_format($product->precio) ?></h3>

								<small><?= $product->nombre  ?></small>
							</div>
						</div>
					</div>
				</div>
			<?php
				$count++;
				if ($count == 3) {
					break;
				}
			endwhile; ?>
		</div>
	</div>
</div>