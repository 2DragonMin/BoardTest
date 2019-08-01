var title, listNum;
var joinID, findNum, newPwd1, newPwd2;
var inTitle, inContents, inFile;

$(document).ready(function(){
    board(10, 1,"");
});

$(document).on('click', '#btn-sch', function() {
    title = $('input[name=title]').val();
    board(10, 1, title);
});


$(document).on('click', '#btn-IDchk', function() {
    joinID = $('input[name=id]').val();
    checkId(joinID);
});

$(document).on('click', '#btn-signUp', function() {
    joinID = $('input[name=id]').val();
    newPwd1 = $('input[name=pwd1]').val();
    newPwd2 = $('input[name=pwd2]').val();
    signup(joinID, newPwd1, newPwd2);
});
/*
$(document).on('click', '#btn-write', function() {
    inTitle = $('input[name=title]').val();
    inContents = $('input[name=contents]').val();
    inFile = $('input[name=file]').val();
    writeBoard(inTitle, inContents, inFile);
});
*/
$(document).on('click', '#btn-del', function() {
    findNum = $('input[name=id]').val();
    deletelist();
});

function board(listNum, page, title) {
    $.ajax({
        type : 'get',
        url : 'list.php',
        dataType : 'json',
        data : {
            'listNum' : listNum,
            'page' : page,
            'search' : title
        },
        success : function(data){
            $('#listCount').children().remove();
            $('#list').children().remove();
            $.each(data.boardData, function(i, item){
                if(item[3] > 0){
                    var re = item[3] * 20;
                    $('#list').append('<tr><td align="center">RE: '+item[3]+
                    '</td><td style="padding-left:'+re+'px"><a href="view.php?id='+item[0]+'">RE: '+item[1]+
                    '</a></td><td align="center">'+item[2]+
                    '</td><td align="center">'+item[5]+
                    '</td></tr>');
                } else {
                    $('#list').append('<tr><td align="center">'+item[4]+
                    '</td><td><a href="view.php?id='+item[0]+'">'+item[1]+
                    '</a></td><td align="center">'+item[2]+
                    '</td><td align="center">'+item[5]+
                    '</td></tr>');
                }                        
            });
            paging(data.listNum, page, data.count, title);
        }
    });
}
function paging(listNum, pageNum, count, title){
    $.ajax({
        type : 'get',
        url : 'page.php',
        dataType : 'json',
        data : {
            'listNum' : listNum,
            'page' : pageNum,
            'count' : count,
            'search' : title
        },
        success : function(data){
            $('#paging').children().remove();
            if(data.page <= 1){
                $('#paging').append('<li class="disabled">first</li>');
            } else {
                $('#paging').append('<li><a href="#" onclick="board('+data.listNum+', 1, '+title+')">first</a></li>');
            }
            for(var i = data.bstart; i <= data.bend; i++){
                if(data.page == i){
                    $('#paging').append('<li class="disabled">'+i+'</li>');
                } else {
                    $('#paging').append('<li><a href="#" onclick="board('+data.listNum+', '+i+', '+title+');">'+i+'</a></li>');
                }
            }
            if(data.page >= data.ptotal){
                $('#paging').append('<li class="disabled">last</li>');
            } else {
                $('#paging').append('<li><a href="#" onclick="board('+data.listNum+', '+data.ptotal+', '+title+')">last</a></li>');
            }
        }
    });
}
function checkId(join){
    $.ajax({
        type : 'get',
        url : 'checkId.php',
        dataType : 'json',
        data : {
            'uid' : join
        },
        success : function(data){
            console.log(join);
            console.log(data);
            if(data[0] != null){
                alert("Have a same ID.");
                location.reload();
            } else {
                alert("Available ID.");
            }
        },
    });
}
function signup(id, pwd1, pwd2){
    $.ajax({
        type : 'POST',
        url : 'signup_action.php',
        dataType : 'json',
        data : {
            'id' : id,
            'pwd1' : pwd1,
            'pwd2' : pwd2
        },
        success : function(data){
            console.log(data[0]);
            if(data == 's')
            {
                alert("Sign up success.");
			    location.replace("/index.php");
            }
            else if(data == 'e'){
                alert("plase your password check.");
            }
        }
    });
}

function changeListcount(){
    listNum = document.getElementById("lc");
    var count = listNum.options[listNum.selectedIndex].text;
    board(count, 1,"");
}

function deletelist(id){
    $.ajax({
        type : 'POST',
        url : 'signup_action.php',
        dataType : 'json',
        data : {
            'id' : id,
            'pwd' : pwd1,
            'conpwd' : pwd2
        },
        success : function(data){
            console.log(data[0]);
        }
    })
}