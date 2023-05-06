<?php
require_once('../config/conexion.php');
require_once('../models/Contrato.php');
$contrato = new Contrato();

switch ($_GET["op"]) {
    case "insert":
        $contrato->insert_contrato($_POST['proc_id'], $_POST['con_num'], $_POST['prov_id'], $_POST['rec_id'], $_POST['con_imp'], $_POST['con_des'], $_POST['par_id'], $_POST['con_ini'], $_POST['con_fin'], $_POST['con_doc']);
        
        if (empty($_FILES['files']['name'])){

        }else{
            /* TODO:Contar Cantidad de Archivos desde la Vista */
            $countfiles = count($_FILES['files']['name']);
            /* TODO: Generamos ruta segun el ID del ultimo registro insertado */
            $ruta = "../public/document/".$output["con_id"]."/";
            $files_arr = array();

            /* TODO: Preguntamos si la ruta existe, en caso no exista la creamos */
            if (!file_exists($ruta)) {
                mkdir($ruta, 0777, true);
            }

            /* TODO:Recorremos los archivos, y insertamos tantos detalles como documentos vinieron desde la vista */
            for ($index = 0; $index < $countfiles; $index++) {
                $doc1 = $_FILES['files']['tmp_name'][$index];
                $destino = $ruta.$_FILES['files']['name'][$index];
            }
        }
        break;

    case "listar_contrato_x_id":
        $datos=$contrato->listar_contrato();
        $data= Array();
        foreach($datos as $row){
            $sub_array = array();
            $sub_array[] = $row["con_id"];
            $sub_array[] = $row["con_num"];
           $sub_array[] =  $row["prov_id"];
            $sub_array[] = strtoupper($row["con_des"]);
            $sub_array[] = '$'.number_format( $row["con_imp"],2);
            $sub_array[] = $row["con_doc"];
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

    }


?>