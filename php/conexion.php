<?php
    include('');
    class conexion{
        private $conexion;
        private $res;
        public function obtener_datos($consulta , $campos_bd){
            try{
                $this-> conectar(constantes::SERVER, constantes::USER, constantes::PASS,constantes::BD);
                $this->res = $this->conexion->query($consulta);
            }catch(){
    
            }
        }
    }
?>