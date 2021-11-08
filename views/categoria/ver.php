<div style="background-color: #28a745; height: 120px"></div>
<div class="px-5 pt-4">

	<?php
	if (isset($categoria)) : ?>
		<h1><?= $categoria->nombre ?></h1>
		<?php if ($productos->num_rows == 0) : ?>
			<p>No hay productos para mostrar</p>
		<?php else : ?>
			<div class="row mt-3">
				<?php foreach ($productos1 as $producto) :
					$nombre = str_replace(array("TA- ", "/"), "", $producto['nombre']);
				?>
					<div class="col-12 col-sm-4">
						<div class="card m-2">
							<img id="myImg" class="card-img-top" src="<?= "https://www.avon.co/assets/es-co/images/product/prod_" . $producto['idImagen'] . "_1_310x310.jpg" ?>" onclick=abrir(this) alt="Card image cap">
							<div id="myModal" class="modal">
								<span class="close">&times;</span>
								<img class="modal-content" id="img01">
							</div>
							<div class="card-body">
								<div class="card-text" style="height:150px">
									<h3><?= ($producto['disponibilidad'] == 1) ? '$ ' . number_format($producto['precio']) : 'No disponible' ?></h3>

									<small><?= $nombre ?></small>
								</div>
								<a href="<?= base_url ?>carrito/add&<?= "id={$producto['id']}&nombre={$nombre}&precio={$producto['precio']}&idImagen={$producto['idImagen']}" ?>" class="btn btn-warning text-white <?= ($producto['disponibilidad'] == 2) ? 'disabled' : '' ?>">Añadir al carrito</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	<?php else : ?>
		<h1>La categoría no existe</h1>
	<?php endif; ?>
</div>
<script>
	var modal = document.getElementById("myModal");
	var modalImg = document.getElementById("img01");

	function abrir(img) {
		modal.style.display = "block";
		modalImg.src = img.src;
	}
	var span = document.getElementsByClassName("close")[0];
	span.onclick = function() {
		modal.style.display = "none";
	}
</script>