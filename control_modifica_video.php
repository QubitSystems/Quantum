<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
       
            
            $conexion = new conexion;
            $seccion =new seccion;
    
            $campos = array ('url');
            $arreglo_datos =$conexion->obtener_datos("select*from videos",$campos);
            $seccion->colocar_arreglo_texto($arreglo_datos);
            $arr = $seccion->obtener_arreglo_texto();
              
        
            foreach($arr as $fila){
                echo ($fila[0])."|";
            }
               //,'fecha','nomb_evento','speaker','hora','direccion','descripcion','imagen' 
                      
?>