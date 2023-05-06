<?php
        require_once ("../config/conexion.php"); 
        require_once("../models/Suficiencia.php");
        $suficiencia = new Suficiencia();

        switch($_GET["op"]){ 
         case "insert":
                $suficiencia->insert_suficiencia($_POST["suf_num"],$_POST["suf_des"],$_POST["suf_imp"],$_POST["par_id"],$_POST["suf_fec"]);
        break; 
        
        case "listar_suficiencia":
                $datos=$suficiencia->listar_suficiencia();
                $data= Array();
                foreach($datos as $row){
                    $sub_array = array();
                    $sub_array[] = $row["suf_id"];
                    $sub_array[] = $row["suf_num"];
                    $sub_array[] = strtoupper($row["suf_des"]);
                    $sub_array[] =  '$'.number_format( $row["suf_imp"],2);
                    $sub_array[] = $row["par_id"];
                    $sub_array[] = $row["suf_fec"];
              
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
