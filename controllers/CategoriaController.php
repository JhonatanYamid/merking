<?php
require_once 'models/categoria.php';
require_once 'models/producto.php';

class categoriaController
{

	public function index()
	{
		Utils::isAdmin();
		$categoria = new Categoria();
		$categorias = $categoria->getAll();

		require_once 'views/categoria/index.php';
	}

	public function ver()
	{
		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			// Conseguir categoria
			$categoria = new Categoria();
			$categoria->setId($id);
			$categoria = $categoria->getOne();

			// Conseguir productos;
			$producto = new Producto();
			$producto->setCategoria($id);
			$productos = $producto->getAllCategory();


			$porcentaje = 35;
			$url = "https://www.avon.co/Api/SearchApi/SearchProducts?q=&getVariants=false&isDesktop=true&facets=0:" . $id . "&forceDatabase=true&cb=-1959961314";
			$json = file_get_contents($url);
			$datos = json_decode($json, true);
			$productos1 = array();
			foreach ($datos['Data']['Products'] as $item) {

				$price = ($item['Availability'] == 1) ? $item['ListPrice'] + ($item['ListPrice'] * $porcentaje / 100) : 'Agotado';
				$productos1[] = array(
					'nombre' => $item['Name'],
					'id' => $item['Id'],
					'nombreCorto' => $item['ShortName'],
					'precio' => $price,
					'precioOriginal' => $item['ListPriceFormatted'],
					'disponibilidad' => $item['Availability'],
					'disponibilidadRazon' => $item['AvailabilityReason'],
					'categoria' => $item['Categories'][0]['PDept']['Slug'],
					'idCategoria' => $item['Categories'][0]['PDept']['Id'],
					'idImagen' => $item['ProfileNumber'],
				);
			}

			require_once 'views/categoria/ver.php';
		}
	}

	public function crear()
	{
		Utils::isAdmin();
		require_once 'views/categoria/crear.php';
	}

	public function save()
	{
		Utils::isAdmin();
		if (isset($_POST) && isset($_POST['nombre'])) {
			// Guardar la categoria en bd
			$categoria = new Categoria();
			$categoria->setNombre($_POST['nombre']);
			$save = $categoria->save();
		}
		header("Location:" . base_url . "categoria/index");
	}

	public function eliminar()
	{
		Utils::isAdmin();

		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$producto = new Categoria();
			$producto->setId($id);

			$delete = $producto->delete();
			if ($delete) {
				$_SESSION['delete'] = 'complete';
			} else {
				$_SESSION['delete'] = 'failed';
			}
		} else {
			$_SESSION['delete'] = 'failed';
		}

		header('Location:' . base_url . 'categoria/index');
	}
}
