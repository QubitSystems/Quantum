<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
       
            
            $id = $_POST['id'];
            $fecha = $_POST['fecha'];
            $nomb_evento = $_POST['nombre'];
            $speaker = $_POST['speaker'];
            $hora =$_POST['hora'];
            $direccion=$_POST['direccion'];
            $descripcion=$_POST['descripcion'];
            $imagen =$_FILES['imagen'];
            

            $conexion = new conexion;
            $seccion =new seccion;
            $campos = array ('fecha','nomb_evento','speaker','hora','direccion','descripcion','imagen');
            $arreglo_datos =$conexion->obtener_datos("select*from eventos where id=$id",$campos);
        
            $seccion->colocar_arreglo_texto($arreglo_datos);
            $arr = $seccion->obtener_arreglo_texto();         
        
?>