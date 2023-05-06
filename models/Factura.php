<?php
    class  Factura extends Conectar{
        public function insert_factura($fac_num,$fac_imp,$fac_ofi,$fac_fec,$fac_per){ 
            $conectar=parent::conexion(); 
            parent::set_names(); 
            $sql="INSERT INTO tm_factura(fac_id,fac_num,fac_imp,fac_ofi,fac_fec,fac_per,fac_est) VALUES ('NULL',?,?,?,?,?,'1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $fac_num);
            $sql->bindValue(2, $fac_imp);
            $sql->bindValue(3, $fac_ofi);
            $sql->bindValue(4, $fac_fec);
            $sql->bindValue(5, $fac_per);
            $sql->execute(); 
            return $resultado=$sql->fetchAll();
        }

        public function listar_factura(){
            $conectar= parent::conexion();
                parent::set_names();
                $sql="SELECT 
                            tm_factura.fac_id,
                            tm_factura.fac_num,
                            tm_factura.fac_imp,
                            tm_factura.fac_ofi,
                            tm_factura.fac_fec,
                            tm_factura.fac_per
                FROM tm_factura";
                $sql=$conectar->prepare($sql);
                $sql->execute();
                return $resultado=$sql->fetchAll();
            }
    }
?>