<?php
    class Contrato extends Conectar{
        public function insert_contrato($pro_id, $con_num, $prov_id, $rec_id, $con_imp, $con_des, $par_id, $con_ini, $con_fin){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="INSERT INTO tm_contrato (con_id, pro_id, con_num, prov_id, rec_id, con_imp, con_des, par_id, con_ini, con_fin, est) VALUES (NULL,?,?,?,?,?,?,?,?,?,'1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $pro_id ); /*numero de procedimiento*/
            $sql->bindValue(2, $con_num); /*numero de contrato*/
            $sql->bindValue(3, $prov_id); /*Proveedor*/
            $sql->bindValue(4, $rec_id); /*Tipo de Recurso*/
            $sql->bindValue(5, $con_imp); /*Importe*/
            $sql->bindValue(6, $con_des); /*Objeto del Contrarto*/
            $sql->bindValue(7, $par_id); /*Partida Presupuestal*/
            $sql->bindValue(8, $con_ini); /*Vigencia inicial*/
            $sql->bindValue(9, $con_fin); /*Vigencia Final*/
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }
?>