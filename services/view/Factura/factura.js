
function init(){
    $("#factura_form").on("submit",function(e){
        guardaryeditar(e);
    });
}

$(document).ready(function() {
    $('#prov_dom').summernote({
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
        var formData = new FormData($("#factura_form")[0]);
        $.ajax({
            url: "../../controller/factura.php?op=insert",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(datos){
                console.log(datos);
                $('#factura_form').val('');
                $('#').summernote('reset');
           
                swal("Correcto!", "Registrado Correctamente", "success");
            }
            });
    }

init();
