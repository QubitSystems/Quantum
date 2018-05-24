<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
       
            
            $conexion = new conexion;
            $seccion =new seccion;
    
            $campos = array ('fecha','nomb_evento','speaker','hora','direccion','descripcion','imagen');
            $arreglo_datos =$conexion->obtener_datos("select*from eventos",$campos);
            $seccion->colocar_arreglo_texto($arreglo_datos);
            $arr = $seccion->obtener_arreglo_texto();
              
        
            foreach($arr as $fila){
                echo ($fila[0]."#".$fila[1]."#".$fila[2]."#".$fila[3]."#".$fila[4]."#".$fila[5])."#".$fila[6]."|";
            }
               //,'fecha','nomb_evento','speaker','hora','direccion','descripcion','imagen' 
           
           
?>