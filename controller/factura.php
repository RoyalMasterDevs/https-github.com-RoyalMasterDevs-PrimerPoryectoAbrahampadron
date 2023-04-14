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
                    $sub_array[] =$row["fac_id"];
                    $sub_array[] = $row["fac_num"];
                    $sub_array[] = '$'.number_format( $row["fac_imp"],2);
                    $sub_array[] = strtoupper($row["fac_ofi"]);
                    $sub_array[] = $row["fac_fec"];
                    $sub_array[] =$row["fac_per"];
                    $data[] = $sub_array;
                }
                $results = array(
                    "sEcho" => 1,
                    "iTotalRecords" => count($data),
                    "iTotalDisplayRecords" => count($data),
                    "aaData" => $data
                );
                echo json_encode($results);
        
                break;
                
            }
        
    
        ?>

