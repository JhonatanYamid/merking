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







			$productos1 =  array(
				array(
					'nombre' => 'TA- Set x 2 300 ooo Adrenaline Fragancia 100 ml',
					'id' => 564652,
					'nombreCorto' => 'TA- Set x 2 300',
					'precio' => 16800,
					'precioOriginal' => '$ 12.000',
					'disponibilidad' => 1,
					'idImagen' => '117721c',
					'categoria' => 'perfumeria',
					'idCategoria' => 465,
					
				),
				array(
					'nombre' => 'TA- Set x 2 300 Km/h Max Turbo Gel Para Afeitar Sin Espuma 90 g + Virtual Adrenaline Fragancia 100 ml',
					'id' => 54652,
					'nombreCorto' => 'TA- Set x 2 300',
					'precio' => 'No disponible',
					'precioOriginal' => '$ 12.000',
					'disponibilidad' => 2,
					'idImagen' => '117721c',
					'categoria' => 'perfumeria',
					'idCategoria' => 465,
					
				),
				array(
					'nombre' => 'TA- Set x 2 300 Km/h Max Turbo Gel Para Afeitar Sin Espuma 90 g + Virtual Adrenaline Fragancia 100 ml',
					'id' => 54652,
					'nombreCorto' => 'TA- Set x 2 300',
					'precio' => 16800,
					'precioOriginal' => '$ 12.000',
					'disponibilidad' => 1,
					'idImagen' => '117721c',
					'categoria' => 'perfumeria',
					'idCategoria' => 465,
					
				),
				array(
					'nombre' => 'TA- Set x 2 300 Km/h Max Turbo Gel Para Afeitar Sin Espuma 90 g + Virtual Adrenaline Fragancia 100 ml',
					'id' => 54655552,
					'nombreCorto' => 'TA- Set x 2 300',
					'precio' => 16800,
					'precioOriginal' => '$ 12.000',
					'disponibilidad' => 1,
					'idImagen' => '117628c',
					'categoria' => 'perfumeria',
					'idCategoria' => 465,
					
				),
				array(
					'nombre' => 'TA- Set x 2 300 Km/h Max Turbo Gel Para Afeitar Sin Espuma 90 g + Virtual Adrenaline Fragancia 100 ml',
					'id' => 54652,
					'nombreCorto' => 'TA- Set x 2 300',
					'precio' => 16800,
					'precioOriginal' => '$ 12.000',
					'disponibilidad' => 1,
					'idImagen' => '117721c',
					'categoria' => 'perfumeria',
					'idCategoria' => 465,
					
				),
				array(
					'nombre' => 'TA- Set x 2 300 Km/h Max Turbo Gel Para Afeitar Sin Espuma 90 g + Virtual Adrenaline Fragancia 100 ml',
					'id' => 54652,
					'nombreCorto' => 'TA- Set x 2 300',
					'precio' => 16800,
					'precioOriginal' => '$ 12.000',
					'disponibilidad' => 1,
					'idImagen' => '117721c',
					'categoria' => 'perfumeria',
					'idCategoria' => 465,
					
				),
			);





			// $url = "https://www.avon.co/Api/SearchApi/SearchProducts?q=&getVariants=false&isDesktop=true&facets=0:".$id."&forceDatabase=true&cb=-1959961314";
			// $json = file_get_contents($url);
			// $datos = json_decode($json, true);
		}

		require_once 'views/categoria/ver.php';
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
