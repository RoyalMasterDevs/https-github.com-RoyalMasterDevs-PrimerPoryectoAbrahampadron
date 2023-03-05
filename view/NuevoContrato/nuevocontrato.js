$(document).ready(function() {
    /* Inicializar Summernote */
    $('#tick_descrip').summernote({
        height: 150
    });
    $.post("../../controller/proveedor.php?op=combo",function(data, status){
        $('#prov_id').html(data);
        console.log(data);
    });




});

