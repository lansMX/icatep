const idForm = "#auth";
// const parentDir = location.href + '../../../src/action/';
var parentDir = '../../src/action/';
// let dataSourceReq = null;

$(document).ready((e)=>{
    initDataTable()
});

function initDataTable(){
    $('#tableRequi').DataTable();
}

function dataSourceReq(){
    let ajaxRequest = $.ajax({
        sync : true,
        beforeSend : (e) =>{
            // anim load
        },
        timeout : 800,
        type : 'GET',
        url : parentDir + 'requisition',
    });

    ajaxRequest.done(function(response){
        console.log(response);
    });
}

function detailRequisition(){var ajaxReques = $.ajax({
    sync : true,
    beforeSend : (e) =>{
        // anim load
    },
    timeout : 800,
    type : 'POST',
    data : { 'id' : 1},
    url : 'http://localhost/ICATEP_PANEL/src/action/requisition',
});

ajaxReques.done(function(response){
    console.log(response);
});}