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
                    $sub_array[] = '<center>'.$row["suf_id"].'</center>';
                    $sub_array[] = '<center>'.$row["suf_num"].'</center>';
                    $sub_array[] = strtoupper($row["suf_des"]);
                    $sub_array[] =  '<center>'.'$'.number_format( $row["suf_imp"],2).'</center>';
                    $sub_array[] = '<center>'.$row["par_id"].'</center>';
                    $sub_array[] =  '<center>'.date("d/m/Y", strtotime($row["suf_fec"])).'</center>';
                
                    
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
