$(document).ready(function(){

$.post("../../controller/recurso.php?op=combo",function(data, status){
            $('#rec_id').html(data);
        
});

});