<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
       /* gestiona el combo box */
            $conexion = new conexion;
            $seccion =new seccion;
            $listas = '<option value="0">--Seleccione un Evento --</option>';
            $campos = array ('id','servicio','nombre','descripcion','imagen1','caracteristicas','caracteristica2','caracteristica3','imagen2');
            $arreglo_datos =$conexion->obtener_datos("select*from servicios",$campos);
            $seccion->colocar_arreglo_texto($arreglo_datos);
            $arr = $seccion->obtener_arreglo_texto();
              
            echo '<option value="0">--Seleccione un Servicio--</option>';
            foreach($arr as $fila){
                echo "<option value='$fila[0]'>$fila[1]</option>";
            }
?>