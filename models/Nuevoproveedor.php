<?php
    class  Nuevoproveedor extends Conectar{
        public function insert_nuevoproveedor($rfc,$prov_nom,$prov_dom){ 
            $conectar=parent::conexion(); 
            parent::set_names(); 
            $sql="INSERT INTO tm_proveeor (prov_id, rfc, prov_nom, prov_dom, prov_est) VALUES (NULL,?,?,?,'1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $rfc);
            $sql->bindValue(2, $prov_nom);
            $sql->bindValue(3, $prov_dom);
            $sql->execute(); 
            return $resultado=$sql->fetchAll(); 
    }


}
?>


