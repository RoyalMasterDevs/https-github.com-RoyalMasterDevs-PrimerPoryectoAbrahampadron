
function init(){
    $("#contrato_form").on("submit",function(e){
        guardaryeditar(e);
    });
}

$(document).ready(function() {
    $('#con_des').summernote({
        height: 150,
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
       
});

    function guardaryeditar(e){
        e.preventDefault();
        var formData = new FormData($("#contrato_form")[0]);
        $.ajax({
            url: "../../controller/contrato.php?op=insert",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(datos){
                console.log(datos);
                $('#con_num').val('');
                $('#pro_id').val('');
                $('#proc_id').val('');
                $('#prov_id').val('');
                $('#rec_id').val('');
                $('#con_imp').val('');
                $('#par_id').val('');
                $('#con_ini').val('');
                $('#con_ini').val('');
                $('#con_fin').val('');

                $('#con_des').summernote('reset');
           
                swal("Correcto!", "Registrado Correctamente", "success");
            }
            });
    }

init();

