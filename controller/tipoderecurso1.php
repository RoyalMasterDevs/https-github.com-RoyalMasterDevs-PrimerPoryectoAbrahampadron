<?php

        require_once("../config/conexion.php"); /*Se queriere la Cadena de Conexion */
        require_once("../models/tipoderecurso.php"); /*El modelo recurso */
        $tipoderecurso = new Tipoderecurso(); /*Se crea la clase */

        switch($_GET["op1"]){  /*se cerea un swich */
               case "combo1": /*se crea un case un caso  */
                $datos=$tipoderecurso->get_tipoderecurso(); /*se cre la variable datos */
                if(is_array($datos)==true and count($datos)>0){ /*si la variable contiene datos  */
                $html= "<option>--Seleccione--</option>";
                    foreach($datos as $row)
                    {
                        $html.= "<option value='".$row['rec_id ']."'>".$row['tb_recurso']."</option>";
                   }
                        echo $html;
                }
            break; /*se cierra el case */
    }
?>