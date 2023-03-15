$(document).ready(function(){

$.post("../../controller/procedimiento.php?op=combo",function(data, status){
            $('#proc_id').html(data);
        
});

});