var setId, setpwd, getId, getchk;
$(document).ready(function(){
    loadId();
});

$(document).on('click', '#btn-signIn', function() {
    setId = $('input[name=id]').val();
    setpwd = $('input[name=pwd]').val();
    setchk = $('[name=idchkbox]').is(':checked');
    console.log(setId+'.'+setpwd);
    if(setchk){
        saveId(setId);
    }
    else {
        clearId();
    }
    signIn(setId, setpwd);
});

function saveId(set){
    localStorage.setItem('Id', set);
}

function loadId(){
    if(localStorage.getItem('Id')){
        getId = localStorage.getItem('Id');
        $('input[name=id').val(getId);
        $('input[name=idchkbox').attr('checked', true);
    }
    else {
        clearId();
    }
}

function clearId(){
    localStorage.clear();
    $('input[name=idchkbox').attr('checked', false);
}

function signIn(id, pwd){
    $.ajax({
        type : 'POST',
        url : 'signin_action.php',
        dataType : 'json',
        data : {
            'id' : id,
            'pwd' : pwd,
        },
        success : function(data){
            console.log(data);
            if(data == 's')
            {
                alert("Sign in success.");
			    location.replace("/index.php");
            }
            else if(data == 'p'){
                alert("plase your password check.");
            }
            else if(data == 'i'){
                alert("plase your Id check.");
            }
        }
    });
}