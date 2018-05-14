<?
	include('cargador_imagenes.php');
	include('conexion.php');
	include('seccion.php');
	include('consultas.php');
	
	$selectSection = $_POST['selectSection']; //ComboBox del número de la sección
	$product = $_POST['selectProduct']; //ComboBox del número del productos
	$nombre_imagen = "";
	if($selectSection == "Grains"){
		$selectSection = "granos";
		$nombre_imagen = 'grano';
	}
	else if($selectSection == "Rice & Sugar"){
		$selectSection = "r&s";
		$nombre_imagen = 'rys';
	}
	else if($selectSection == "Fruits"){
		$selectSection = "frutas";
		$nombre_imagen = 'fruta';
	}
	
	echo $selecSection;
	
	$nomProduct = $_POST['nomProduct'];
	$descripcion = $_POST['descProduct'];
	$archivo = $_FILES['imagen_Producto'];
	
	$indice = $product-1;
	$conexion = new conexion;
	$seccion = new seccion;
	$campos_bd = array('id'); 
	$matriz_datos = $conexion->obtener_datos("SELECT id FROM product WHERE (seccion='$selectSection' AND idioma=1) LIMIT 1 OFFSET $indice ", $campos_bd);
	$seccion->colocar_arreglo_texto($matriz_datos[0]);
	$arr = $seccion->obtener_arreglo_texto();
	$id = $arr[0];
	$conexion->actualizar_datos("UPDATE product SET nombre='$nomProduct', descr='$descripcion' WHERE id=$id");	
	
	$cargador_img = new cargador_imagenes;
	if(isset($archivo)){
		$cargador_img->subir_imagen($archivo, $nombre_imagen . $product . '.jpg', 'images/', 2000000);
	}
		
?>