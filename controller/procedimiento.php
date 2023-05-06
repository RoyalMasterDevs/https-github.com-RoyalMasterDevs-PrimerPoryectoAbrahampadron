<?php

        require_once("../config/conexion.php"); /*Se queriere la Cadena de Conexion */
        require_once("../models/Procedimiento.php"); /*El modelo proveedor */
        $procedimiento = new Procedimiento(); /*Se crea la clase */

        switch($_GET["op"]){  /*se cerea un swich */
               case "combo": /*se crea un case un caso  */
                $datos=$procedimiento->get_procedimiento(); /*se cre la variable datos */
                if(is_array($datos)==true and count($datos)>0){ /*si la variable contiene datos  */
                $html= "<option>--Seleccione--</option>";
                    foreach($datos as $row)
                    {
                        $html.= "<option value='".$row['proc_id']."'>".$row['proc_nom']."</option>";
                        $html.= "<option value='".$row['proc_id']."'>".$row['pro_descripcion']."</option>";
                   }
                        echo $html;
                }
            break; /*se cierra el case */
    }
?>