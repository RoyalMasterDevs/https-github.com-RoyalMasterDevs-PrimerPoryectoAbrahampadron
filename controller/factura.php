<?php
        require_once ("../config/conexion.php"); 
        require_once("../models/Factura.php");
        $factura = new Factura();

        switch($_GET["op"]){ 
         case "insert":
                $factura->insert_factura($_POST["fac_num"],$_POST["fac_imp"],$_POST["fac_ofi"],$_POST["fac_fec"],$_POST["fac_per"]);
        break; 
        
        case "listar_factura_x_id":
                $datos=$factura->listar_factura();
                $data= Array();
                foreach($datos as $row){
                    $sub_array = array();
                    $sub_array[] = '<center>'.$row["fac_id"].'</center>';
                    $sub_array[] = '<center>'.$row["fac_num"].'</center>';
                    $sub_array[] = '<center>'.'$'.number_format( $row["fac_imp"],2).'</center>';
                    $sub_array[] = strtoupper($row["fac_ofi"]);
                    $sub_array[] = '<center>'.date("d/m/Y", strtotime($row["fac_fec"])).'</center>';
                    $sub_array[] = '<center>'.$row["fac_per"].'</center>';
                    $data[] = $sub_array;
                }
                $results = array(
                    "sEcho" => 1,
                    "iTotalRecords" => count($data),
                    "iTotalDisplayRecords" => count($data),
                    "aaData" => $data
                );
                echo json_encode($results);
                
            }
        
        
        ?>

