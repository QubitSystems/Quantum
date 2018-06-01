<?php
		include('cargar_imagen.php');
		include('conexion.php');
		include('seccion.php');
       //mostrar la data en al momento de hacer el select al combo box
           
           
            $conexion = new conexion;
            $seccion =new seccion;
            $id=$_POST['id'];

            $campos = array ('fecha','nomb_evento','speaker','hora','direccion','descripcion','imagen');
            $arreglo_datos =$conexion->obtener_datos("select*from eventos where id=$id",$campos);
                /* $seccion->colocar_arreglo_texto($arreglo_datos);
                $arr = $seccion->obtener_arreglo_texto();
                foreach($arr as $fila){
                echo utf8_encode($fila[0]."#".$fila[1]."#".$fila[2]."#".$fila[3]."#".$fila[4]."#".$fila[5])."#".$fila[6]."|";
                }*/
         /* */
           
            
            $seccion->colocar_arreglo_texto($arreglo_datos[0]);
	           $arr = $seccion->obtener_arreglo_texto();

	           //Arreglo con todas las respuestas
	           $arregloRespuesta = array('Texto1'=>$arr[0], 'Texto2'=>$arr[1], 'Texto3'=>$arr[2],'Texto4'=>$arr[3],'Texto5'=>$arr[4],'Texto6'=>$arr[5],'Texto7'=>$arr[6]);

	           //RESPUESTA
	           //echo json_encode($arreglo_final);	
	           echo $arregloRespuesta['Texto1']."#".$arregloRespuesta['Texto2']."#".$arregloRespuesta['Texto3']."#".$arregloRespuesta['Texto4']."#".$arregloRespuesta['Texto5']."#".$arregloRespuesta['Texto6']."#".$arregloRespuesta['Texto7'];
            
//,'fecha','nomb_evento','speaker',       'hora',    'direccion','descripcion','imagen' 
                 
?>