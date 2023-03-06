<?php
    class  Contrato extends Conectar{

        public function insert_contrato($con_numero,$prov_id,$con_des){ /* funcion Contato*/
            $conectar= parent::conexion(); /* funcion se prepara la conexion*/
            parent::set_names(); /* funcion se prepara la conexion*/
            $sql="INSERT INTO tb_contrato (con_id, con_numero, prov_id, con_des) VALUES (NULL,'?','?','?');"; /* Sentencia SQL*/
            $sql = $conectar->prepare($sql); /* Se prepara la conexión*/
            $sql->bindValue(1, $con_numero);
            $sql->bindValue(2, $prov_id);
            $sql->bindValue(4, $con_des);
            $sql->execute(); /* Se ejecuta el SQL*/
            return $resultado=$sql->fetchAll(); /* Se muestra el resultado o se retorana*/
    }
}



?>
