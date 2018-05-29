<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
       
            
            $conexion = new conexion;
            $seccion =new seccion;
    
            $campos = array ('nomb_servicio','desc_servicio','caracteristica1','caracteristica2','caracteristica3','imagen1','imagen2');
            $arreglo_datos =$conexion->obtener_datos("select*from servicios",$campos);
            $seccion->colocar_arreglo_texto($arreglo_datos);
            $arr = $seccion->obtener_arreglo_texto();
              
        
            foreach($arr as $fila){
                echo ($fila[0]."#".$fila[1]."#".$fila[2]."#".$fila[3]."#".$fila[4])."#".$fila[5]."#".$fila[6]."|";
            }
               //,'fecha','nomb_evento','speaker','hora','direccion','descripcion','imagen' 
           
           
?>