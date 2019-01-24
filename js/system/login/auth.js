const idForm = "#auth";
const parentDir = location.href + '/src/action/';

$(document).ready((e)=>{
    eventAuth();
});

function eventAuth(){
    $(idForm).submit((e)=>{
        e.preventDefault();
        auth($(idForm).serialize());
    });
}

function auth(data){
    let request = $.ajax({
        async : true,
        beforeSend : (e) =>{
            // anim load
        },
        data : data,
        timeout : 800,
        type : 'POST',
        url : parentDir + 'login',
    });

    request.done((resp)=>{
        resp =JSON.parse(resp);
        if(resp !== undefined){
            if(resp.status === 'success'){
                alert('User found');
                location = resp.sendTo; // url got in server-side
                return;
            }
            alert('User not found');
        }else{
            alert('Information not available');
        }
    });
}