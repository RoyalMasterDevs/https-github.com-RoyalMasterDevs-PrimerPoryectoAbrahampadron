<?php
        require_once("../config/conexion.php"); /*Se queriere la Cadena de Conexion */
        require_once("../models/Contrato.php"); /*El modelo Contrato */
        $contrato = new Contrato(); /*Se crea la clase */

        switch($_GET["op"]){  /*se cerea un swich */
               case "insert": /*se crea un case un caso  */ 
                $contrato->insert_contrato($_POST["usu_id"],$_POST["prov_id"],$_POST["con_numero"],$_POST["con_descrip"]); /*se cre la variable datos */
        break; /*se cierra el case */
        }
?>