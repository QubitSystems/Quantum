<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
       /*controla el combo box de servicios */
            
            $conexion = new conexion;
            $seccion =new seccion;
            $listas = '<option value="0">--Seleccione un Video --</option>';
            $campos = array ('id','nombre','url');
            $arreglo_datos =$conexion->obtener_datos("select * from videos",$campos);
            $seccion->colocar_arreglo_texto($arreglo_datos);
            $arr = $seccion->obtener_arreglo_texto();
              
            echo '<option value="0">--Seleccione un Video--</option>';
            foreach($arr as $fila){
                echo "<option value='$fila[0]'>$fila[1]</option>";
            
            }
               //,'fecha','nomb_evento','speaker','hora','direccion','descripcion','imagen' 
           
          
?>