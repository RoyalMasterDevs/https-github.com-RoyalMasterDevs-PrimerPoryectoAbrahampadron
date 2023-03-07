<?php
    class  Nuevoproveedor extends Conectar{

        public function insert_nuevoproveedor($prov_nom){ 
            $conectar= parent::conexion(); 
            parent::set_names(); 
            $sql="INSERT INTO tb_proveedor (prov_nom) VALUES ('?');";
            
            
            /* Sentencia SQL*/
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $prov_nom);
            $sql->execute(); 
            return $resultado=$sql->fetchAll(); 
    }
}



?>
