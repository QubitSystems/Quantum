<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
       
            $conexion = new conexion;
            $seccion =new seccion;
            $campos = array ('id','nombre','descripcion','imagen1','caracteristicas','caracteristica2','caracteristica3','imagen2');
            $arreglo_datos =$conexion->obtener_datos("select*from servicios",$campos);
            $seccion->colocar_arreglo_texto($arreglo_datos);
            $arr = $seccion->obtener_arreglo_texto();
            $listas ='<option value="0">--Seleccione un Servicio--</option>';
            foreach($arr as $fila){
                echo utf8_encode($fila[0])."#".$fila[1]."#".$fila[2]."#".$fila[3]."#".$fila[4]."#".$fila[5]."#".$fila[6]."#".$fila[7]."|";
                
            }
?>