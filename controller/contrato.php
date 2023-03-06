<?php

        require_once("../config/conexion.php"); /*Se queriere la Cadena de Conexion */
        require_once("../models/contrato.php"); /*El modelo proveedor */
        $contrato = new Contrato(); /*Se crea la clase */

        switch($_GET["op"]){  /*se cerea un swich */
               case "insert": /*se crea un case un caso  */
                $contrato->insert_contrato($_POST[$con_numero],$_POST[$prov_id],$_POST[$con_des]); /*se cre la variable datos */
        break; /*se cierra el case */
        }
?>