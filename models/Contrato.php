<?php
class Contrato extends Conectar{
<<<<<<< HEAD
    public function insert_contrato($proc_id, $con_num, $prov_id, $rec_id, $con_imp, $con_des, $par_id, $con_ini, $con_fin, $con_doc)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO tm_contrato(con_id, proc_id, con_num, prov_id, rec_id, con_imp, con_des, par_id, con_ini, con_fin, con_doc, est) VALUES('NULL',?,?,?,?,?,?,?,?,?,'1')";
=======
    public function insert_contrato($proc_id, $con_num, $prov_id, $rec_id, $con_imp, $con_des, $par_id, $con_ini, $con_fin)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO tm_contrato(con_id, proc_id, con_num, prov_id, rec_id, con_imp, con_des, par_id, con_ini, con_fin, est) VALUES('NULL',?,?,?,?,?,?,?,?,?,'1')";
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $proc_id); /*Tipo de procedimiento*/
        $sql->bindValue(2, $con_num); /*numero de contrato*/
        $sql->bindValue(3, $prov_id); /*Proveedor*/
        $sql->bindValue(4, $rec_id); /*Tipo de Recurso*/
        $sql->bindValue(5, $con_imp); /*Importe*/
        $sql->bindValue(6, $con_des); /*Objeto del Contrarto*/
        $sql->bindValue(7, $par_id); /*Partida Presupuestal*/
        $sql->bindValue(8, $con_ini); /*Vigencia inicial*/
        $sql->bindValue(9, $con_fin); /*Vigencia Final*/
<<<<<<< HEAD
        $sql->bindValue(9, $con_doc); /*Vigencia Final*/
=======
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function listar_contrato(){
    $conectar= parent::conexion();
        parent::set_names();
        $sql="SELECT
                        tm_contrato.con_id,
                        tm_contrato.con_num,
                        tm_contrato.prov_id,
                        tm_contrato.con_des,
<<<<<<< HEAD
                        tm_contrato.con_imp,
                        tm_contrato.con_doc
=======
                        tm_contrato.con_imp
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
                FROM
                tm_contrato";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll();
    }
<<<<<<< HEAD

=======
    public function contratodetalle(){
        $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT tm_contrato.con_num
                  FROM
                        tm_contrato
                        WHERE con_id=?";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

       
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
}
?>