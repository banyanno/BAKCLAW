var save_method; //for save method string
var maintableLAID;
//ar base_url = $("#base_url").val();
var base_url = window.location.origin;
var caseID=0;

//===================== Declear variable in Module client case regis===============================
var tableclientadult;
var tableclientminor;

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

/*if ( $.fn.dataTable.isDataTable( '#example' ) ) {
    table = $('#example').DataTable();
}
else {
    table = $('#example').DataTable( {
        paging: false
    } );
}*/

function SaveOrUpdateClient(){
    var url;
   $(".form-group").removeClass('has-error').removeClass('has-success');
   $("#messageclient").html('');
   $('.text-danger').remove();
   if (save_method == 'add') {
       url = base_url +'/BAKCLAW/CaseRegis_Controller/InsertClient';
   }
   else {
       //alert('update' + clientID);
       url =base_url +'/BAKCLAW/CaseRegis_Controller/Edit_CaseRegist/'+ caseID;   
   }

 // ajax adding data to database
  
 var data = $("#formclient").serialize();
                $.ajax({
                url: url,
                type: "POST",
                data: data,
                dataType: "JSON",
                success:function(response) {
                    alert(response.success);
                    if (response.success==true){
                        
                        $("#messageclient").html('<div class="alert alert-success alert-dismissible" role="alert">' +
                            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                            response.messages +
                            '</div>');
                            //maintableLAID.ajax.reload(null, false);
                            FetchClientByCase(caseID);
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







