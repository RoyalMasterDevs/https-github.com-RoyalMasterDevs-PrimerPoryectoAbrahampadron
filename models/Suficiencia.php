<?php
    class  Suficiencia extends Conectar{
        public function insert_Suficiencia($suf_num,$suf_des,$suf_imp,$par_id,$suf_fec){ 
            $conectar=parent::conexion(); 
            parent::set_names(); 
       $sql="INSERT INTO tm_suficiencias(suf_id, suf_num, suf_des ,suf_imp, par_id,suf_fec, suf_est) VALUES ('NULL',?,?,?,?,?,'1');";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $suf_num);
            $sql->bindValue(2, $suf_des);
            $sql->bindValue(3, $suf_imp);
            $sql->bindValue(4, $par_id);
            $sql->bindValue(5, $suf_fec);
            $sql->execute(); 
            return $resultado=$sql->fetchAll(); 
        }

    
        public function listar_suficiencia(){
            $conectar= parent::conexion();
                parent::set_names();
                $sql="SELECT 
                            tm_suficiencias.suf_id,
                            tm_suficiencias.suf_num,
                            tm_suficiencias.suf_des,
                            tm_suficiencias.suf_imp,
                            tm_suficiencias.par_id,
                            tm_suficiencias.suf_fec
                FROM tm_suficiencias";
                $sql=$conectar->prepare($sql);
                $sql->execute();
                return $resultado=$sql->fetchAll();
            }
    }
?>