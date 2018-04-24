var save_method; //for save method string
var maintableLAID;
//ar base_url = $("#base_url").val();
var base_url = window.location.origin;
var caseID=0;


//===================== Declear variable in Module client case regis===============================
var tableclientadult;
var tableclientminor;
var clientID=0;

$(document).ready(function(){

    //$('#datetimepicker1').datetimepicker({
    //    language: 'pt-BR'
    //});

  maintableLAID = $("#maintableLAID").DataTable({
          'ajax': base_url +'/BAKCLAW/CaseRegis_Controller/fetchAllCaseRegis','order':[]
      });
  }); //end document

// The function call when add new case registation 
  function ShowCaseRegis(){
    save_method = 'add';
      $("#dateregis").datepicker({
        dateFormat: 'yy-mm-dd'
    });
    $('#formLAID')[0].reset(); // reset form on modals
    $('#ModalCaseRegis').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add new case'); // Set Title to Bootstrap modal title
    }


function ShowEditeCase(id) {
    save_method = 'update';
     $('#formLAID')[0].reset(); // reset form on modals
     //Ajax Load data from ajax
     caseID=id;
     $.ajax({
         url: base_url+'/BAKCLAW/CaseRegis_Controller/Get_CaseByID/' + caseID,
         type: "GET",
         dataType: "JSON",
         success: function (data) {
 
             $('[name="caseid"]').val(data.caseid);
             $('[name="caseno"]').val(data.caseno);
             $('[name="dateregis"]').val(data.dateregis);
             $('[name="typeofcase"]').val(data.typeofcase);
             $('[name="accusations"]').val(data.accusations);
             $('[name="getfrom"]').val(data.getfrom);
             $('[name="casenote"]').val(data.casenote);
 
 
             $('#ModalCaseRegis').modal('show'); // show bootstrap modal when complete loaded
             $('.modal-title').text('Edit Case Register'); // Set title to Bootstrap modal title
 
         },
         error: function (jqXHR, textStatus, errorThrown) {
             alert('Error get data from ajax');
         }
     });
 }




  function SaveNewCaseRegis() {
    var url;
     $(".form-group").removeClass('has-error').removeClass('has-success');
    $("#add-class-messages").html('');
    $('.text-danger').remove();
    if (save_method == 'add') {
        url = base_url +'/BAKCLAW/CaseRegis_Controller/insertNewCaseRegis';
    }
    else {
        //alert('update' + clientID);
        url =base_url +'/BAKCLAW/CaseRegis_Controller/Edit_CaseRegist/'+ caseID;   
    }

    // ajax adding data to database
  
        var data = $("#formLAID").serialize();
          $.ajax({
            url: url,
            type: "POST",
            data: data,
            dataType: "JSON",
            success:function(response) {
                   if (response.success==true){
                        
                    $("#add-class-messages").html('<div class="alert alert-success alert-dismissible" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                        response.messages +
                        '</div>');
                        maintableLAID.ajax.reload(null, false);
                    if(save_method == 'add'){
                        $("#formLAID")[0].reset();
                        $(".form-group").removeClass('has-error').removeClass('has-success');
                        $(".text-danger").remove();	
                        //$("#add-class-messages").html('');
                    } else{
                        $("#add-class-messages").html('');
                        $("#formLAID")[0].reset();
                        $(".form-group").removeClass('has-error').removeClass('has-success');
                        $(".text-danger").remove();	
                        $('#ModalCaseRegis').modal('hide');
                    }
                   
                }
                else{
                   
                    $.each(response.messages, function (index, value) {
                        
                        var key = $("#" + index);
                        altert(key);
                        key.closest('.form-group')
                            .removeClass('has-error')
                            .removeClass('has-success')
                            .addClass(value.length > 0 ? 'has-error' : 'has-success')
                            .find('.text-danger').remove();
                            key.after(value);

                    });
                }
                //if success close modal and reload ajax table
                //alert('Save new client successfull');
                //$('#ModalExample').modal('hide');
                //location.reload();// for reload a page
            }
            //,
            //error: function (jqXHR, textStatus, errorThrown) {
            //    alert('Error adding / update data');
            //}
        }); 
}

//=============================================Start Module Client that related Case Registration============================================
  
function ShowClientCase(case_id){
    caseID=case_id;
    save_method = 'add';
    $('#formclient')[0].reset(); // reset form on modals
    $('[name="caseregisid"]').val(case_id); // show case regis id for save to client
    $('#ModalClient').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add new client'); // Set Title to Bootstrap modal title
} 


function ShowCaseToEdite(clientid) {
     save_method = 'update';
     clientID=clientid;
     $('#formclient')[0].reset(); // reset form on modals
     //Ajax Load data from ajax
     $.ajax({
         url: base_url+'/BAKCLAW/CaseRegis_Controller/Get_ClientByID/' + clientID,
         type: "GET",
         dataType: "JSON",
         success: function (data) {
             $('[name="caseclientid"]').val(data.caseclientid);
             $('[name="caseregisid"]').val(data.caseregisid);
             $('[name="clientname"]').val(data.clientname);
             $('[name="clientsex"]').val(data.clientsex);
             $('[name="clientage"]').val(data.clientage);
          if(data.adults=='1'){
               document.getElementById("adult").checked = true;
             }
             else{
                document.getElementById("minner").checked=true;
             }
            if (data.isclient =='1'){
                document.getElementById("client").checked = true;
            }else{
                document.getElementById("otherclient").checked = true;
            }
             $('[name="adults"]').checked=true;
             $('[name="clientnote"]').val(data.clientnote);
 
             $('#ModalClient').modal('show'); // show bootstrap modal when complete loaded
             $('.modal-title').text('Edit client'); // Set title to Bootstrap modal title
 
         },
         error: function (jqXHR, textStatus, errorThrown) {
             alert('Error get data from ajax');
         }
     });
 }


function FetchClientByCase(caseid){
    tableclientadult = $("#tableclientadult").DataTable({
            'ajax': base_url +'/BAKCLAW/CaseRegis_Controller/GetClientByCaseAndAdult/'+caseid,'order':[]
});
    
    tableclientadult.destroy();
    
    tableclientminor = $("#tableclientminor").DataTable({
        'ajax': base_url +'/BAKCLAW/CaseRegis_Controller/GetClientByCaseAndminor/'+caseid,'order':[]
    });
    tableclientminor.destroy();
}

function DeleteClient(Client){
    var url=base_url +'/BAKCLAW/CaseRegis_Controller/DeletedClientByID/'+Client;
                var data = $("#formclient").serialize();
                $.ajax({
                url: url,
                type: "POST",
                data: data,
                dataType: "JSON",
                success:function(response) {
                    
                    if (response.success==true){
                        
                        /*$("#messageclient").html('<div class="alert alert-success alert-dismissible" role="alert">' +
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                            response.messages +
                            '</div>');*/
                            tableclientadult.ajax.reload(null , false);
                            tableclientminor.ajax.reload(null , false);
                            //maintableLAID.ajax.reload(null , false);
                            //FetchClientByCase(caseID);
                       /* if(save_method == 'add'){
                            $("#formclient")[0].reset();
                            $(".form-group").removeClass('has-error').removeClass('has-success');
                            $(".text-danger").remove();	
                            //$("#add-class-messages").html('');
                            //FetchClientByCase();
                        } else{
                            $("#messageclient").html('');
                            $("#formclient")[0].reset();
                            $(".form-group").removeClass('has-error').removeClass('has-success');
                            $(".text-danger").remove();	
                            $('#ModalClient').modal('hide');
                        }*/
                        
                    }
                    else{
                        
                        $.each(response.messages, function (index, value) {
                            
                            var key = $("#" + index);
                            altert(key);
                            key.closest('.form-group')
                                .removeClass('has-error')
                                .removeClass('has-success')
                                .addClass(value.length > 0 ? 'has-error' : 'has-success')
                                .find('.text-danger').remove();
                                key.after(value);

                        });
                    }
                    //if success close modal and reload ajax table
                    //alert('Save new client successfull');
                    //$('#ModalExample').modal('hide');
                    //location.reload();// for reload a page
                }
                //,
                //error: function (jqXHR, textStatus, errorThrown) {
                //    alert('Error adding / update data');
                //}
                });
}

function SaveOrUpdateClient(){
var url;
   $(".form-group").removeClass('has-error').removeClass('has-success');
   $("#messageclient").html('');
   $('.text-danger').remove();
   if (save_method == 'add') {
       url = base_url +'/BAKCLAW/CaseRegis_Controller/InsertClient';
   }
   else {
        url =base_url +'/BAKCLAW/CaseRegis_Controller/EditeClientByID/'+ clientID;   
   }

 // ajax adding data to database
  
                var data = $("#formclient").serialize();
                $.ajax({
                url: url,
                type: "POST",
                data: data,
                dataType: "JSON",
                success:function(response) {
                    
                    if (response.success==true){
                        
                        $("#messageclient").html('<div class="alert alert-success alert-dismissible" role="alert">' +
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                            response.messages +
                            '</div>');
                            tableclientadult.ajax.reload(null , false);
                            tableclientminor.ajax.reload(null , false);
                            //maintableLAID.ajax.reload(null , false);
                            //FetchClientByCase(caseID);
                        if(save_method == 'add'){
                            $("#formclient")[0].reset();
                            $(".form-group").removeClass('has-error').removeClass('has-success');
                            $(".text-danger").remove();	
                            //$("#add-class-messages").html('');
                            //FetchClientByCase();
                        } else{
                            $("#messageclient").html('');
                            $("#formclient")[0].reset();
                            $(".form-group").removeClass('has-error').removeClass('has-success');
                            $(".text-danger").remove();	
                            $('#ModalClient').modal('hide');
                        }
                        
                    }
                    else{
                        
                        $.each(response.messages, function (index, value) {
                            
                            var key = $("#" + index);
                            altert(key);
                            key.closest('.form-group')
                                .removeClass('has-error')
                                .removeClass('has-success')
                                .addClass(value.length > 0 ? 'has-error' : 'has-success')
                                .find('.text-danger').remove();
                                key.after(value);

                        });
                    }
                    //if success close modal and reload ajax table
                    //alert('Save new client successfull');
                    //$('#ModalExample').modal('hide');
                    //location.reload();// for reload a page
                }
                //,
                //error: function (jqXHR, textStatus, errorThrown) {
                //    alert('Error adding / update data');
                //}
                });

}

//============================================= End Module client =============================================


/*
===============================================================================
    Start create Court by when user select receive case from court.....
*/

function ShowCourtRegis(caseid){
    caseID=caseid;
    save_method = 'add';
    $("#datecourt").datepicker({
        dateFormat: 'yy-mm-dd'
    });
    
    $(".select_group").select2();
    $(".select_lawyer").select2();
    $(".courtname").select2();
    removeAllTableLawyer();
    $("#datepoorinterview").datepicker({dateFormat: 'yy-mm-dd'});
    $('#formCourt')[0].reset(); // reset form on modals
   
    $('#ModalCourt').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add court...'); // Set Title to Bootstrap modal title
}

function addRowToTable(){
    var table=$("#lawyer_info_table");
    var count_table_tboby_tr = $("#lawyer_info_table tbody tr").length;
    var row_id = count_table_tboby_tr + 1;
    
    /*var html ='<tr id="row_' + row_id +'">' +
                    '<td><input type="text" name="qty[]" id="qty_'+row_id+'" class="form-control"></td>'+
                    '<td><input type="text" name="rate[]" id="rat_'+row_id+'" class="form-control"></td>'+
                    '<td><input type="text" name="date[]" id="date_'+row_id+'" class="form-control"></td>'+
                    '<td><button type="button" class="btn btn-default" onclick="removeRow(\''+row_id+'\')"><i class="fa fa-close"></i></button></td>'+
                    '</tr>';
           if(count_table_tboby_tr >= 1){
              $("#lawyer_info_table tbody tr:last").after(html);
            }else{
              $("#lawyer_info_table tbody").html(html);
           }*/
          
    $.ajax({
        url: base_url + '/BAKCLAW//CaseRegis_Controller/getLawyerInfo/',
        type: 'post',
        dataType: 'json',
        success:function(response){
            var html ='<tr id="row_'+ row_id +'">' +
            '<td>' +
            '<select class="form-control select_lawyer lawyer" data-row-id="'+ row_id +'" id="lawyer_'+ row_id +'" name="lawyer[]" style="width:100%;" require>' +
            '<option value=""></option>';
             $.each(response, function(index, value) {
               
                html += '<option value="'+value.id+'">'+ value.lawyer_name_kh + '</option>';             
            });
            html += '</select>'+
            '</td>' +
            '<td> <input type="text" name="aprovelawyer[]" id="aprovelawyer_'+ row_id +'" class="form-control" require></td>'+
            '<td><input type="text" name="aprovedate[]" id="aprovedate_'+row_id  +'" class="form-control" readonly="readonly" require></td>' +
            '<td><button type="button" class="btn btn-default" onclick="removeRow(\''+ row_id +'\')"><i class="fa fa-close"></i></button></td>'+
            '</tr>';
            if(count_table_tboby_tr >= 1){
                $("#lawyer_info_table tbody tr:last").after(html);
              }else{
                $("#lawyer_info_table tbody").html(html);
             }
           $(".select_lawyer").select2();
           $("#aprovedate_"+ row_id).datepicker({
            dateFormat: 'yy-mm-dd'
            });
        }
    });
    return false;
}

function removeRow(tr_id)
{
  $("#lawyer_info_table tbody tr#row_"+tr_id).remove();
  
}
function removeAllTableLawyer(){
    $("#lawyer_info_table tbody tr").remove();
}


/*
================================================================================
    End module create court in case registration.....
*/






