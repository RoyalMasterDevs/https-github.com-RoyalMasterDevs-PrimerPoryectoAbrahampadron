<?php
        require_once("../config/conexion.php"); 
        require_once("../models/Contrato.php"); 
        $contrato = new Contrato(); 

        switch($_GET["op"]){ 
               case "insert": 
                $contrato->insert_contrato($_POST["usu_id"],$_POST["prov_id"],$_POST["con_numero"],$_POST["con_descrip"]); /*se cre la variable datos */
        break; /*se cierra el case */
        }
?>