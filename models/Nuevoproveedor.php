<?php
    class  Nuevoproveedor extends Conectar{

        public function insert_nuevoproveedor($prov_id, $prov_nom, $prov_est){ 
            $conectar= parent::conexion(); 
            parent::set_names(); 
            $sql="INSERT INTO tb_proveedor(prov_id, prov_nom, prov_est) VALUES (NULL,?,'1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $prov_id);
            $sql->bindValue(2, $prov_nom);
            $sql->bindValue(3, $prov_est);
            $sql->execute(); 
            return $resultado=$sql->fetchAll(); 
    }


}



?>
