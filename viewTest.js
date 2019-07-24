var getId
$(document).ready(function(){
    getId = document.location.href.split("=");
    console.log(getId[1]);
    view(getId[1]);
});


$(document).on('click', '#btn-comup', function() {
    //title = $('input[name=title]').val();
    comment(getId);
});

function view(id){
    $.ajax({
        type : 'get',
        url : 'viewData.php',
        dataType : 'json',
        data : {
            'id' : id
        },
        success : function(data){
            console.log(data);
            $('#viewData').append('<tr><td>'+data.view[0][0]+'</td>'
            +'<td>'+data.view[0][1]+'</td>'
            +'<td>'+data.view[0][2]+'</td>'
            +'<td>'+data.view[0][3]+'</td></tr>'
            );
            comment(id);
            /*
            $.each(data.comment, function(i, comment){
                //$('#viewComment').remove();
                $('#viewComment').append('<tr><td>'+comment[0]+'</td>'
                +'<td>'+comment[1]+'</td</tr>');
            });
            */
        },
    });
}

function comment(id){
    $.ajax({
        type : 'get',
        url : 'viewData.php',
        dataType : 'json',
        data : {
            'id' : id
        },
        success : function(data){
            $.each(data.comment, function(i, comment){ 
                $('#viewComment').append('<tr><td>'+comment[0]+'</td>'
                +'<td>'+comment[1]+'</td</tr>');
            });
        },
    });
}