<div style="background-color: #28a745; height: 120px"></div>
<div class="px-5 pt-4">

	<?php
	if (isset($categoria)) : ?>
		<h1><?= $categoria->nombre ?></h1>
		<?php if ($productos->num_rows == 0) : ?>
			<p>No hay productos para mostrar</p>
		<?php else : ?>
			<div class="row mt-3">
				<?php while ($product = $productos->fetch_object()) : ?>
					<div class="col-12 col-sm-3">
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
								<a href="<?= base_url ?>carrito/add&id=<?= $product->id ?>" class="btn btn-warning text-white">Añadir al carrito</a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
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