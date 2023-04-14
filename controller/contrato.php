<?php
require_once('../config/conexion.php');
require_once('../models/Contrato.php');
$contrato = new Contrato();

switch ($_GET["op"]) {
    case "insert":
        $contrato->insert_contrato($_POST['proc_id'], $_POST['con_num'], $_POST['prov_id'], $_POST['rec_id'], $_POST['con_imp'], $_POST['con_des'], $_POST['par_id'], $_POST['con_ini'], $_POST['con_fin']);
        break;

    case "listar_contrato_x_id":
        $datos=$contrato->listar_contrato();
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row['con_id'];
            $sub_array[] = $row["con_num"];
            $sub_array[] = $row["prov_id"];
            $sub_array[] = strtoupper($row["con_des"]);
            $sub_array[] ='$'.number_format( $row["con_imp"], 2);
            $sub_array[] = '<button type="button" onClick="ver('.$row["con_id"].');" id="'.$row["con_id"].'" class="btn btn-inline btn-primary btn-sm ladda-button"><i class="fa fa-eye"></i></button>';
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
        case "contratodetalle":
        $datos=$contrato->contratodetalle();
        ?>
             <?php
            foreach(datos as $row){
                ?>
                 	<div class="box-typical box-typical-padding">
			<h5 class="m-t-lg with-border">Contrato Número
			<div>Vigencia</div>
			</h5>
				
            <?php
                }
              
           
                ?>

     
            <?php
        break; 


            
          }


?>