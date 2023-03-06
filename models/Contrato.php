<?php
    class  Contrato extends Conectar{

        public function insert_contrato($usu_id,$con_numero,$prov_id,$con_des){ /* funcion Contato*/
            $conectar= parent::conexion(); /* funcion se prepara la conexion*/
            parent::set_names(); /* funcion se prepara la conexion*/
            $sql="INSERT INTO tb_contrato (con_id,usu_id,con_numero,prov_id,con_des,est) VALUES (NULL,'?','?','?','?','1');"; /* Sentencia SQL*/
            $sql = $conectar->prepare($sql); /* Se prepara la conexión*/
            $sql->bindValue(1, $usu_id);
            $sql->bindValue(2, $con_numero);
            $sql->bindValue(3, $prov_id);
            $sql->bindValue(4, $con_des);
            $sql->execute(); /* Se ejecuta el SQL*/
            return $resultado=$sql->fetchAll(); /* Se muestra el resultado o se retorana*/
    }
}



?>
