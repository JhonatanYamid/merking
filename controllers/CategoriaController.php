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
					'TA- Set x 2 300 Km/h Max Turbo Gel Para Afeitar Sin Espuma 90 g + Virtual Adrenaline Fragancia 100 ml',
					54652,
					'TA- Set x 2 300',
					16800,
					'$ 12.000',
					1,
					'perfumeria',
					465, 'https://www.avon.co/assets/es-co/images/product/prod_117721c_1_310x310.jpg'
				),
				array(
					'TA- Set x 2 300 Km/h Max Turbo Gel Para Afeitar Sin Espuma 90 g + Virtual Adrenaline Fragancia 100 ml',
					54652,
					'TA- Set x 2 300',
					16800,
					'$ 12.000',
					1,
					'perfumeria',
					465, 'https://www.avon.co/assets/es-co/images/product/prod_117721c_1_310x310.jpg'
				),
				array(
					'TA- Set x 2 300 Km/h Max Turbo Gel Para Afeitar Sin Espuma 90 g + Virtual Adrenaline Fragancia 100 ml',
					54652,
					'TA- Set x 2 300',
					16800,
					'$ 12.000',
					1,
					'perfumeria',
					465, 'https://www.avon.co/assets/es-co/images/product/prod_117721c_1_310x310.jpg'
				),
				array(
					'TA- Set x 2 300 Km/h Max Turbo Gel Para Afeitar Sin Espuma 90 g + Virtual Adrenaline Fragancia 100 ml',
					54652,
					'TA- Set x 2 300',
					16800,
					'$ 12.000',
					1,
					'perfumeria',
					465, 'https://www.avon.co/assets/es-co/images/product/prod_117721c_1_310x310.jpg'
				),
				array(
					'TA- Set x 2 300 Km/h Max Turbo Gel Para Afeitar Sin Espuma 90 g + Virtual Adrenaline Fragancia 100 ml',
					54652,
					'TA- Set x 2 300',
					16800,
					'$ 12.000',
					1,
					'perfumeria',
					465, 'https://www.avon.co/assets/es-co/images/product/prod_117721c_1_310x310.jpg'
				),
				array(
					'TA- Set x 2 300 Km/h Max Turbo Gel Para Afeitar Sin Espuma 90 g + Virtual Adrenaline Fragancia 100 ml',
					54652,
					'TA- Set x 2 300',
					16800,
					'$ 12.000',
					1,
					'perfumeria',
					465, 'https://www.avon.co/assets/es-co/images/product/prod_117721c_1_310x310.jpg'
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
