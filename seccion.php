<?php
	class seccion {
		private $arreglo_texto;

		//Recibe un arreglo texto
		public function colocar_arreglo_texto($arreglo_texto){
			$this->arreglo_texto = $arreglo_texto;
		}

		public function obtener_arreglo_texto(){
			return $this->arreglo_texto;
		}
	}
?>