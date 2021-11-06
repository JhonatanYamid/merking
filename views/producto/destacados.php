<img class="img-fluid" src="<?= base_url ?>assets/img/banner 3.png" alt="banner">
<div class="row" style="background-color:#ebebe7">
	<img class="img-fluid" src="<?= base_url ?>assets/img/banner2.png" alt="banner">
	<div class="col-sm-12 px-5 pb-4">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" style="border-radius: 20px;">
				<div class="carousel-item active">
					<img class="d-block w-100 d-block" src="<?= base_url ?>assets/img/azul.png" alt="First slide" height="400">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 d-block" src="<?= base_url ?>assets/img/salmon.png" alt="Second slide" height="400">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100 d-block" src="<?= base_url ?>assets/img/azul claro.png" alt="Third slide" height="400">
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
	<div class="d-none d-sm-block col-12 px-5 pb-5">
		<div class="row pb-5">
			<?php
			$count = 0;
			while ($product = $productos->fetch_object()) : 
			?>
				<div class="col-sm-4">
					<div class="card m-2">
						<img id="myImg" class="card-img-top" src="<?= base_url . $product->imagen ?>" onclick=abrir(this) alt="Card image cap">
						<div id="myModal" class="modal">
							<span class="close">&times;</span>
							<img class="modal-content" id="img01">
						</div>
						<div class="card-body">
							<h5 class="card-title ">
								<?= $product->nombre ?>
							</h5>
							<div class="card-text">
								<p><?= '$ ' . $product->precio ?></p>
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