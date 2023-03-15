<?php
        require_once ("../config/conexion.php"); 
        require_once("../models/Nproveedor.php");
        $nproveedor = new Nproveedor();

        switch($_GET["op"]){ 
         case "insert":
                $nproveedor->insert_proveedor($_POST["rfc"],$_POST["prov_nom"],$_POST["prov_dom"]);
        break; 
        }
?>
