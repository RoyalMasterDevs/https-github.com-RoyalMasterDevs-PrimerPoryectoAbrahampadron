<?php
    /* TODO:Cadena de Conexion */
    require_once("../config/conexion.php");
    require_once("../models/Contrato.php");
    $contrato = new Contrato();

    switch($_GET["op"]){
         case "insert":
            $contato->insert_contrato($_POST["pro_id"],$_POST["con_num"],$_POST["prov_id"],$_POST["rec_id"],$_POST["con_imp"],$_POST["con_des"],$_POST["par_id"],$_POST["con_ini"],$_POST["con_fin"]);
        break;
    }
?>
