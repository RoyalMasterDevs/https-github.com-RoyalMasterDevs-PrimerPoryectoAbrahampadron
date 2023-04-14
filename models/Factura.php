<?php
    class  Factura extends Conectar{
        public function insert_factura($fac_num,$fac_imp,$fac_ofi,$fac_fec,$fac_per){ 
            $conectar=parent::conexion(); 
            parent::set_names(); 
            $sql="INSERT INTO factura(fac_id,fac_num,fac_imp,fac_ofi,fac_fec,fac_per,fac_est) VALUES ('NULL',?,?,?,?,?,'1');";
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
                            factura.fac_id,
                            factura.fac_num,
                            factura.fac_imp,
                            factura.fac_ofi,
                            factura.fac_fec,
                            factura.fac_per
                FROM factura";
                $sql=$conectar->prepare($sql);
                $sql->execute();
                return $resultado=$sql->fetchAll();
            }

            public function sumafactura(){
                $conectar= parent::conexion();
                    parent::set_names();
                    $sql="SELECT sum(factura.fac_imp) FROM factura where factura.fac_id =?";
                    $sql=$conectar->prepare($sql);
                    $sql->execute();
                    return $resultado=$sql->fetchAll();
                }


    }
?>


