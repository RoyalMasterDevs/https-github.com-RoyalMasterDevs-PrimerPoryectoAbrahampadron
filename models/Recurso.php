<?php
      class  Recurso extends Conectar{

        public function get_recurso(){ /* funcion Proveedor*/
            $conectar= parent::conexion(); /* funcion se prepara la conexion*/
            parent::set_names(); /* funcion se prepara la conexion*/
            $sql = "SELECT * FROM tm_recurso WHERE rec_est=1;"; /* Sentencia SQL*/
            $sql = $conectar->prepare($sql); /* Se prepara la conexión*/
            $sql->execute(); /* Se ejecuta el SQL*/
            return $resultado=$sql->fetchAll(); /* Se muestra el resultado o se retorana*/
         }
    }
?>