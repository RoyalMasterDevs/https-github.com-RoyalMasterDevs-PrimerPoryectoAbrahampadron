
    $.post("../../controller/tipoderecuso.php?op=combo1",function(data, status){
        $('#tipoderecurso.js').html(data);
        console.log(data);
    });



