<?php
        require_once("../config/conexion.php"); 
        require_once("../models/Nuevoproveedor.php"); 
        $nuevoproveedor = new Nuevoproveedor();

        switch($_GET["op"]){ 
         case "insert":
                $nuevoproveedor->insert_nuevoproveedor($_POST["$prov_nom"]); /*se cre la variable datos */
        break; 
        }
?>