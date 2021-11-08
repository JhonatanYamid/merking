<div style="background-color: #28a745; height: 120px"></div>
<div class="row px-5 pt-4" style="height: 100%;">
	<?php if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1) : ?>
		<div class="col-12">
			<h2 class="mt-4 mb-4 font-weight-bold">Carrito de la compra</h2>
			<a href="<?= base_url ?>carrito/delete_all" class="btn btn-secondary btn-md mb-5">Vaciar carrito</a>
			<div style="max-width:100%; overflow-x:scroll;">
				<table class="table table-hover">
					<tr>
						<th>Imagen</th>
						<th>Nombre</th>
						<th>Precio</th>
						<th>Unidades</th>
						<th>Eliminar</th>
					</tr>
					<?php
					foreach ($_SESSION['carrito'] as $indice => $producto) :
						// $producto = $elemento['producto'];
					?>
						<tr>
							<td>
								<img src="<?= "https://www.avon.co/assets/es-co/images/product/prod_" . $producto['idImagen'] . "_1_310x310.jpg" ?>" width="100" height="80" />
							</td>
							<td>
								<?= $producto['nombre'] ?>
							</td>
							<td>
								<?= $producto['precio'] ?>
							</td>
							<td>
								<?= $producto['unidades'] ?>
								<div class="updown-unidades">
									<a href="<?= base_url ?>carrito/up&index=<?= $indice ?>" class="btn">+</a>
									<a href="<?= base_url ?>carrito/down&index=<?= $indice ?>" class="btn">-</a>
								</div>
							</td>
							<td>
								<a href="<?= base_url ?>carrito/delete&index=<?= $indice ?>" class="btn btn-danger">Quitar producto</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
				<div>
					<?php $stats = Utils::statsCarrito(); ?>
					<h4 class="my-5">
						<strong>Total: <em>$<?= number_format($stats['total']) ?></em></strong>
					</h4>
				</div>
			</div>
		</div>
		<div class="col-12" style="margin-top:-60px;">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title font-weight-bold mt-2">Datos del cliente</h4>
					<h6 class="card-subtitle mb-5 text-muted">Favor rellenar los siguientes datos ya que son necesarios para continuar con el pedido</h6>
					<form action="<?= base_url ?>venta/hacer" method="POST" enctype="multipart/form-data" class="form-group">
						<div class="form-group">
							<label for="nombre">Nombre completo</label>
							<input class="form-control" name="total" type="hidden" id="total" value="<?= number_format($stats['total']) ?>">
							<input class="form-control" name="nombre" type="text" id="nombre" placeholder="Ingrese su nombre completo" required>
						</div>
						<div class="form-group">
							<label for="numero">Teléfono móvil</label>
							<input class="form-control" name="numero" type="number" id="numero" placeholder="Ingrese su número de teléfono móvil" required>
						</div>
						<div class="form-group">
							<label for="email">Correo Electrónico</label>
							<input type="email" name="email" class="form-control" id="email" placeholder="nombre@ejemplo.com" required>
						</div>
						<div class="form-group">
							<label for="direccion">Dirección de envío</label>
							<input class="form-control" name="direccion" type="text" id="direccion" placeholder="Ejemplo: Calle 20 # 24A - 58 El Carmen de Viboral - Ant" required>
						</div>
						<a href="#" class="card-link"><button type="submit" class="btn btn-primary">Hacer pedido</button></a>
					</form>
				</div>
			</div>
		</div>
	<?php else : ?>
		<p>El carrito está vacio, añade algun producto</p>
	<?php endif; ?>
</div>