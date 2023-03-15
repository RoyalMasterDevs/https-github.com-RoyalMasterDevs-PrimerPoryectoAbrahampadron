<?php

        require_once("../config/conexion.php"); /*Se queriere la Cadena de Conexion */
        require_once("../models/Recurso.php"); /*El modelo proveedor */
        $recurso = new Recurso(); /*Se crea la clase */

        switch($_GET["op"]){  /*se cerea un swich */
               case "combo": /*se crea un case un caso  */
                $datos=$recurso->get_recurso(); /*se cre la variable datos */
                if(is_array($datos)==true and count($datos)>0){ /*si la variable contiene datos  */
                $html= "<option>--Seleccione--</option>";
                    foreach($datos as $row)
                    {
                        $html.= "<option value='".$row['rec_id']."'>".$row['rec_descripcion']."</option>";
                   }
                        echo $html;
                }
            break; /*se cierra el case */
    }
?>