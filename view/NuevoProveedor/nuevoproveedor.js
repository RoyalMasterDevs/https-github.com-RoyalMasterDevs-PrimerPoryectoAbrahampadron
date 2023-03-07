function init(){
    $("#proveedor_form").on("submit",function(e){
        guardar(e);
    });

}

    function guardar(e){
        e.preventDefault();
        var formData = new FormData($("#proveedor_form")[0]);
        $.ajax({
            url:"../controller/nuevoproveedor.php.php?op=insert",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(datos){
                console.log(datos);
            }
            
            });
}

init();