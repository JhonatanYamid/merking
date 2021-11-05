		<div class="row">
			<div class="col-sm-12">
				<div id="carouselExampleControls" class="carousel slide mt-3" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100 d-block" src="<?= base_url ?>assets/img/carrito.jpg" alt="First slide" height="400">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 d-block" src="<?= base_url ?>assets/img/default.png" alt="Second slide" height="400">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 d-block" src="<?= base_url ?>assets/img/oferta.jpg" alt="Third slide" height="400">
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
		</div>
		<hr class="mb-5">
		<div class="row">
			<?php while ($product = $productos->fetch_object()) : ?>
				<figure class="col-md-4 container-img">
					<a class="black-text" href="<?= base_url ?>producto/ver&id=<?= $product->id ?>">
						<?php if ($product->imagen != null) : ?>
							<img alt="picture" src="<?= base_url ?><?= $product->imagen ?>" width="50" height="50" class="img-fluid" />
						<?php else : ?>
							<img alt="picture" src="<?= base_url ?>assets/img/default.png" width="100" height="100" class="img-fluid" />
						<?php endif; ?>
						<h2><?= $product->nombre ?></h2>
					</a>
					<a href="<?= base_url ?>carrito/add&id=<?= $product->id ?>" class="btn btn-success mb-3">Comprar</a>
				</figure>
				<!--<p><?= $product->precio ?></p>-->
			<?php endwhile; ?>
		</div>