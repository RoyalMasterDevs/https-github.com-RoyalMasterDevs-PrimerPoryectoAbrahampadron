<?php

        require_once("../config/conexion.php"); /*Se queriere la Cadena de Conexion */
        require_once("../models/Proveedor.php"); /*El modelo proveedor */
        $proveedor = new Proveedor(); /*Se crea la clase */

        switch($_GET["op"]){  /*se cerea un swich */
               case "combo": /*se crea un case un caso  */
                $datos=$proveedor->get_proveedor(); /*se cre la variable datos */
                if(is_array($datos)==true and count($datos)>0){ /*si la variable contiene datos  */
                $html= "<option>--Seleccione--</option>";
                    foreach($datos as $row)
                    {
                        $html.= "<option value='".$row['prov_id']."'>".$row['prov_nom']."</option>";
                   }
                        echo $html;
                }
            break; /*se cierra el case */
    }
?>