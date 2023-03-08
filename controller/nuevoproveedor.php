<?php
        require_once("../config/conexion.php"); 
        require_once("../models/Nuevoproveedor.php"); 
        $nuevoproveedor = new Nuevoproveedor();

        switch($_GET["op"]){ 
         case "insert":
                $nuevoproveedor->insert_nuevoproveedor($_POST["prov_id"],$_POST["prov_nom"],$_POST["prov_est"]); 
        break; 
        }
?>