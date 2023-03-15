
function init(){
    $("#contrato_form").on("submit",function(e){
        guardaryeditar(e);
    
    
    });

}

$(document).ready(function() {
      $("#con_descrip").summernote({
        height: 150,
        lang: "es-ES",
        popover: {
            onImageUpload: function(image) {
                console.log("Image detect...");
                myimagetreat(image[0]);
            },
            onPaste: function (e) {
                console.log("Text detect...");
            }
        },
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
        ]
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
            success: function(datos){
            $('#tick_titulo').val('');
            $('#rfc').val('');
            $('#con_descrip').summernote('reset');
                /* TODO: Alerta de Confirmacion */

            swal("Correcto!", "Registrado Correctamente", "success");
            }
            
            });
}

init();