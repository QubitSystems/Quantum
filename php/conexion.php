<?php
	include('constantes.php');

	class conexion{
		private $conexion;
		private $res;

		//El segundo parametro es un arreglo de cadenas que tiene los campos de la base de datos
		public function obtener_datos($consulta, $campos_bd){
			try{		
				$this->conectar_y_seleccionar_bd(constantes::SERVER, constantes::USER, constantes::PASS, constantes::BD);
				//$resultado = mysql_query($consulta, $this->conexion) or die("Error en la consulta SQL!");
				$this->res = $this->conexion->query($consulta);
				//mysql_close($this->conexion);
				return $this->procesar_resultado($this->res, $campos_bd);
			} catch(PDOException $e){
				print "Error!: ".$e->getMessage()."</br>";
				die();
			}	
		}

		private function conectar_y_seleccionar_bd($server, $user, $pass, $bd){
			//$this->conexion = mysql_connect($server, $user, $pass) or die("Error al conectar BD!");
			//mysql_select_db($bd, $this->conexion) or die("Error al seleccionar BD!");
			$this->conexion = new PDO("mysql:host=$server;dbname=$bd", $user, $pass);
		}

		private function procesar_resultado($resultado, $campos_bd){
			$arreglo_resultado = array();
			//while($fila = mysql_fetch_array($resultado)){
			foreach($this->res as $fila){	
				$vector = array();
				foreach ($campos_bd as $campo) {
					array_push($vector, $fila[$campo]);
				}
				array_push($arreglo_resultado, $vector);
			}
			return $arreglo_resultado;                  
		}

		public function actualizar_datos($consulta){
			try{	
				$this->conectar_y_seleccionar_bd(constantes::SERVER, constantes::USER, constantes::PASS, constantes::BD);
				//mysql_query($consulta, $this->conexion) or die("Error en la consulta SQL!");
				$this->res = $this->conexion->query($consulta);
				//mysql_close($this->conexion);
			} catch(PDOException $e){
				print "Error!: ".$e->getMessage()."</br>";
				die();
			}	
		}
	}
?>