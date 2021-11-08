<?php
require_once 'models/producto.php';

class carritoController{
	
	public function index(){
		if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1){
			$carrito = $_SESSION['carrito'];
		}else{
			$carrito = array();
		}
		require_once 'views/carrito/index.php';
	}
	
	public function add(){
		if(isset($_GET['id'])){
			$producto_id = $_GET['id'];
			$producto_nombre = $_GET['nombre'];
			$producto_precio = $_GET['precio'];
			$producto_idImagen = $_GET['idImagen'];
		}else{
			header('Location:'.base_url);
		}
		
		if(isset($_SESSION['carrito'])){
			$counter = 0;
			foreach($_SESSION['carrito'] as $indice => $elemento){
				if($elemento['id_producto'] == $producto_id){
					$_SESSION['carrito'][$indice]['unidades']++;
					$counter++;
				}
			}	
		}
		
		if(!isset($counter) || $counter == 0){

			// Añadir al carrito
			if(isset($producto_id) && $producto_id){
				$_SESSION['carrito'][] = array(
					"id_producto" => $producto_id,
					"nombre" => $producto_nombre,
					"precio" => $producto_precio,
					"idImagen" => $producto_idImagen,
					"unidades" => 1
				);
			}
		}
		header('Location:' . getenv('HTTP_REFERER'));
	}
	
	public function delete(){
		if(isset($_GET['index'])){
			$index = $_GET['index'];
			unset($_SESSION['carrito'][$index]);
		}
		header("Location:".base_url."carrito/index");
	}
	
	public function up(){
		if(isset($_GET['index'])){
			$index = $_GET['index'];
			$_SESSION['carrito'][$index]['unidades']++;
		}
		header("Location:".base_url."carrito/index");
	}
	
	public function down(){
		if(isset($_GET['index'])){
			$index = $_GET['index'];
			$_SESSION['carrito'][$index]['unidades']--;
			
			if($_SESSION['carrito'][$index]['unidades'] == 0){
				unset($_SESSION['carrito'][$index]);
			}
		}
		header("Location:".base_url."carrito/index");
	}
	
	public function delete_all(){
		unset($_SESSION['carrito']);
		header("Location:".base_url."carrito/index");
	}
	
}