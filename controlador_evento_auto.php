<?
	include('cargador_imagenes.php');
	include('conexion.php');
	include('seccion.php');
	include('consultas.php');
	
	$selectSection = $_POST['selectSection']; //ComboBox del número de la sección
	$nombre_imagen = "";
	if($selectSection == "Evento1"){
		$selecSection = 'evento1';
        $nombre_imagne ='imagen1';
	}
	else if($selectSection == "Evento2"){
		$selecSection = 'evento2';
        $nombre_imagen = 'imagen2';
	}
	else if($selectSection == "Evento3"){
		$selecSection = 'evento3';
        $selecSection ='imagen3';
	}
	else if($selectSection == "Evento4"){
		$selecSection = 'evento4';
        $nombre_imagen = 'imagen4';
	}
	else if($selectSection == "Evento5"){
		$selecSection = 'evento5';
        $selecSection ='imagen5';
	}
	
	echo $selecSection;
	
	$fecha = $_POST['fecha'];
    $nomb_evento=$_POST['nombre'];
    $speaker = $_POST['speaker'];
    $hora = $_POST['hora'];
    $lugar = $_POST['lugar'];
    $direccion = $_POST['direccion'];
	$descripcion = $_POST['descripcion'];
	$archivo = $_FILES['imagen'];
	
	$conexion = new conexion;
	$seccion = new seccion;
	$campos_bd = array('id'); 
	$matriz_datos = $conexion->obtener_datos("SELECT fecha,nomb_evento,speaker,hora,lugar,direccion,descripcion,imagen FROM eventos WHERE (evento='$selectSection' ) ", $campos_bd);
	$seccion->colocar_arreglo_texto($matriz_datos[0]);
	$arr = $seccion->obtener_arreglo_texto();
	$id = $arr[0];
	$conexion->actualizar_datos("UPDATE eventos SET fecha='$fecha',nomb_evento='$nomb_evento',speaker='$sepaker',hora='$hora',lugar='$lugar',direccion='$direccion', descripcion='$descripcion' WHERE id=$id");	
	
	$cargador_img = new cargador_imagenes;
	if(isset($archivo)){
		$cargador_img->subir_imagen($archivo, $nombre_imagen . $product . '.jpg', 'images/', 2000000);
	}
		
?>