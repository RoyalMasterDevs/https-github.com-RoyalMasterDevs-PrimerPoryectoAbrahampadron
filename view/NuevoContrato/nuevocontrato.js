$(document).ready(function() {
    /* Inicializar Summernote */
    $('#con_des').summernote({
        height: 150
    });
    $.post("../../controller/proveedor.php?op=combo",function(data, status){
        $('#prov_id').html(data);
       
    });


});

