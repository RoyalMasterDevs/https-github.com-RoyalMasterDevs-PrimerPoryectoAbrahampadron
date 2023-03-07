
function init(){
    $("#contrato_form").on("submit",function(e){
        guardaryeditar(e);
    });

}

$(document).ready(function() {
      $("#con_descrip").summernote({
        height: 150,
    });

    $.post("../../controller/proveedor.php?op=combo",function(data, status){
        $("#prov_id").html(data);
    });
});

    function guardaryeditar(e){
        e.preventDefault();
        var formData = new FormData($("#contrato_form")[0]);
        $.ajax({
            url: "/../controller/Nuevoproveedor.php?op=insert",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data){
                console.log(data);
            }
            
            });
}

init();