<?php
      class  Proveedor extends Conectar{

        public function get_proveedor(){ /* funcion Proveedor*/
            $conectar= parent::conexion(); /* funcion se prepara la conexion*/
            parent::set_names(); /* funcion se prepara la conexion*/
            $sql = "SELECT * FROM tb_proveedor WHERE prov_est=1;"; /* Sentencia SQL*/
            $sql = $conectar->prepare($sql); /* Se prepara la conexión*/
            $sql->execute(); /* Se ejecuta el SQL*/
            return $resultado=$sql->fetchAll(); /* Se muestra el resultado o se retorana*/
         }
    }
?>