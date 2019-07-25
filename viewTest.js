var getId, getComment;
$(document).ready(function(){
    getId = document.location.href.split("=");
    console.log(getId[1]);
    view(getId[1]);
});

$(document).on('click', '#btn-comup', function() {
    getComment = $('input[name=c_text]').val();
    comment(getId[1], getComment);
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
            $('#viewData').children().remove();
            $('#viewData').append('<tr><td>'+data.view[0][0]+'</td>'
            +'<td>'+data.view[0][1]+'</td>'
            +'<td>'+data.view[0][2]+'</td>'
            +'<td>'+data.view[0][3]+'</td></tr>'
            );
            $('#viewComment').children().remove();
            $.each(data.comment, function(i, comment){    
                $('#viewComment').append('<tr><td>'+comment[0]+'</td>'
                +'<td>'+comment[1]+'</td</tr>');
            });
        },
    });
}

function comment(id, comment){
    $.ajax({
        type : 'get',
        url : 'comment.php',
        dataType : 'json',
        data : {
            'pid' : id,
            'comment' : comment
        },
        success : function(data){
            console.log(id);
            view(id);
        },
    });
}