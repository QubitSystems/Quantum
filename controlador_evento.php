<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
       /*controla el combo box de servicios */
            
            $conexion = new conexion;
            $seccion =new seccion;
            $listas = '<option value="0">--Seleccione un Evento --</option>';
            $campos = array ('id','evento','fecha','nomb_evento','speaker','hora','direccion','descripcion','imagen');
            $arreglo_datos =$conexion->obtener_datos("select*from eventos",$campos);
            $seccion->colocar_arreglo_texto($arreglo_datos);
            $arr = $seccion->obtener_arreglo_texto();
              
            echo '<option value="0">--Seleccione un Evento--</option>';
            foreach($arr as $fila){
                echo "<option value='$fila[0]'>$fila[1]</option>";
            }
               //,'fecha','nomb_evento','speaker','hora','direccion','descripcion','imagen' 
           
       /* foreach($arr as $fila){
              echo $fila[8]."#";
          }*/
        
            
            
?>