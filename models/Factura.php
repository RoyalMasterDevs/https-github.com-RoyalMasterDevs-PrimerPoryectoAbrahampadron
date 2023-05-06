<?php
    class  Factura extends Conectar{
        public function insert_factura($fac_num,$fac_imp,$fac_ofi,$fac_fec,$fac_per){ 
            $conectar=parent::conexion(); 
            parent::set_names(); 
<<<<<<< HEAD
            $sql="INSERT INTO tm_factura(fac_id,fac_num,fac_imp,fac_ofi,fac_fec,fac_per,fac_est) VALUES ('NULL',?,?,?,?,?,'1');";
=======
            $sql="INSERT INTO factura(fac_id,fac_num,fac_imp,fac_ofi,fac_fec,fac_per,fac_est) VALUES ('NULL',?,?,?,?,?,'1');";
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $fac_num);
            $sql->bindValue(2, $fac_imp);
            $sql->bindValue(3, $fac_ofi);
            $sql->bindValue(4, $fac_fec);
            $sql->bindValue(5, $fac_per);
            $sql->execute(); 
<<<<<<< HEAD
            return $resultado=$sql->fetchAll();
=======
            return $resultado=$sql->fetchAll(); 
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
        }

        public function listar_factura(){
            $conectar= parent::conexion();
                parent::set_names();
                $sql="SELECT 
<<<<<<< HEAD
                            tm_factura.fac_id,
                            tm_factura.fac_num,
                            tm_factura.fac_imp,
                            tm_factura.fac_ofi,
                            tm_factura.fac_fec,
                            tm_factura.fac_per
                FROM tm_factura";
=======
                            factura.fac_id,
                            factura.fac_num,
                            factura.fac_imp,
                            factura.fac_ofi,
                            factura.fac_fec,
                            factura.fac_per
                FROM factura";
>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
                $sql=$conectar->prepare($sql);
                $sql->execute();
                return $resultado=$sql->fetchAll();
            }
<<<<<<< HEAD
    }
?>
=======

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


>>>>>>> 0e0f53d8b0554283022f632fbed7cea6630b8f2a
