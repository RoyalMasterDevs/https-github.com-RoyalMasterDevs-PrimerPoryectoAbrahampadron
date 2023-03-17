<?php

        require_once("../config/conexion.php"); /*Se queriere la Cadena de Conexion */
        require_once("../models/Partida.php"); /*El modelo proveedor */
        $partida = new Partida(); /*Se crea la clase */

        switch($_GET["op"]){  /*se cerea un swich */
               case "combo": /*se crea un case un caso  */
                $datos=$partida->get_partida(); /*se cre la variable datos */
                if(is_array($datos)==true and count($datos)>0){ /*si la variable contiene datos  */
                $html= "<option>--Seleccione--</option>";
                    foreach($datos as $row)
                    {
                        $html.= "<option value='".$row['par_id']."'>".$row['par_num']." ".$row['par_desc']."</option>";
                   }
                        echo $html;
                }
            break; /*se cierra el case */
    }
?>