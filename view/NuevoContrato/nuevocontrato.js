$(document).ready(function() {
    /* Inicializar SummerNote */
    $('#tick_descrip').summernote({
        height: 150
    });
    $.post("../../controller/proveedor.php?op=combo",function(data, status){
        $('#id_prov').html(data);
    });




});

