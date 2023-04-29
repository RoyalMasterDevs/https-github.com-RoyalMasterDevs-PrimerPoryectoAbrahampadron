$(document).ready(function(){

$.post("../../controller/partida.php?op=combo",function(data, status){
            $('#par_id').html(data);
        
});

});