$(document).ready(function(){

    $.post("../../controller/proveedor.php?op=combo",function(data, status){
                $('#prov_id').html(data);
            
    });
    
    });