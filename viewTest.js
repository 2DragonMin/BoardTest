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
            $('#viewValue').children().remove();
            contents(data.view);
            $('#viewComment').children().remove();
            $.each(data.comment, function(i, comment){    
                $('#viewComment').append('<tr><td>'+comment[0]+'</td>'
                +'<td>'+comment[1]+'</td</tr>');
            });
        },
    });
}

function contents(view){
    $('#viewData').append('<tr align="center"><td>'+view[0][0]+'</td>'
    +'<td>'+view[0][1]+'</td>'
    +'<td>'+view[0][2]+'</td>'
    +'<td><a href="download.php?filehash='+view[0][5]+'" target="_blank">'+view[0][4]+'</td></tr>'
    );
    $('#viewValue').append('<tr><td>'+view[0][3]+'</td></tr>'
    );
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
            view(id);
        },
    });
}

function getItem(view){
    $('#title').append(view[0][1]);
    $('#contens').append(view[0][3]);
}