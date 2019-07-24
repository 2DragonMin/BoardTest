var title;
$(document).ready(function(){
    board(1, "");
});

$(document).on('click', '#btn-sch', function() {
    title = $('input[name=title]').val();
    board(1, title);
});

function board(page, title) {
    $.ajax({
        type : 'get',
        url : 'list.php',
        dataType : 'json',
        data : {
            'page' : page,
            'search' : title
        },
        success : function(data){
            $('#list').children().remove();
            $.each(data.boardData, function(list, item){
                if(item[3] > 0){
                    var re = item[3] * 20;
                    $('#list').append('<tr><td align="center">'+item[0]+
                    '</td><td style="padding-left:'+re+'px"><a href="view.php?id='+item[0]+'">RE: '+item[1]+
                    '</a></td><td align="center">'+item[2]+
                    '</td></tr>');
                } else {
                    $('#list').append('<tr><td align="center">'+item[0]+
                    '</td><td><a href="view.php?id='+item[0]+'">'+item[1]+
                    '</a></td><td align="center">'+item[2]+
                    '</td></tr>');
                }                        
            });
            paging(page, data.count, title);
        }
    });
}
function paging(pageNum, count, title){
    $.ajax({
        type : 'get',
        url : 'page.php',
        dataType : 'json',
        data : {
            'page' : pageNum,
            'count' : count,
            'search' : title
        },
        success : function(data){
            $('#paging').children().remove();
            if(data.page <= 1){
                $('#paging').append('<li class="disabled">first</li>');
            } else {
                $('#paging').append('<li><a href="#" onclick="board(1, '+title+')">first</a></li>');
            }
            for(var i = data.bstart; i <= data.bend; i++){
                if(data.page == i){
                    $('#paging').append('<li class="disabled">'+i+'</li>');
                } else {
                    $('#paging').append('<li><a href="#" onclick="board('+i+', '+title+');">'+i+'</a></li>');
                }
            }
            if(data.page >= data.ptotal){
                $('#paging').append('<li class="disabled">last</li>');
            } else {
                $('#paging').append('<li><a href="#" onclick="board('+data.ptotal+', '+title+')">last</a></li>');
            }
        }
    });
}