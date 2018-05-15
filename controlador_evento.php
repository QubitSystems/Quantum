<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
		include('consultas.php');
		
        $selectSection = $_POST['selectSection']; 
        

        echo $selectSection;
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
		//$campos_bd = array('evento'); 
		$matriz_datos = $conexion->obtener_datos("SELECT fecha,nomb_evento,speaker,hora,direccion,descripcion,imagen FROM eventos WHERE (evento='$selectSection')");
		//$seccion->colocar_arreglo_texto($matriz_datos[6]);
		$arr = $seccion->obtener_arreglo_texto();
		$id = $arr[0];
		$conexion->actualizar_datos("UPDATE eventos SET fecha='$fecha',nomb_evento='$nomb_evento',speaker='$speaker',hora='$hora',lugar='$lugar',direccion='$direccion', descripcion='$descripcion' WHERE evento=$selectSection");	
		$cargador_img = new cargar_imagen;
		if(isset($archivo)){
			$cargador_img->subir_imagen($archivo, $nombre_imagen . $product . '.jpg', 'images/', 2000000);
		} 
			
	?>