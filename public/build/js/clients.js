var save_method; //for save method string
var clientTable;
//ar base_url = $("#base_url").val();
var base_url = window.location.origin;
var clientID;
//var base_url = '<?php echo base_url();?>'
$(document).ready(function(){
  // alert(base_url);
    clientTable = $("#clientTable").DataTable({
        'ajax': base_url +'/BAKCLAW/parasys/Parasys_view/fetchClassData','order':[]
    });
}); //end document

function ShowClient() {
    save_method = 'add';
    $('#insert_form')[0].reset(); // reset form on modals
    $('#ModalExample').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
}
function RefreshClientList(){
    clientTable.ajax.reload(null, false);
}

function Save() {
    var url;
     $(".form-group").removeClass('has-error').removeClass('has-success');
    $("#add-class-messages").html('');
    $('.text-danger').remove();
    if (save_method == 'add') {
        url = base_url +'/BAKCLAW/systempara/create_client';
    }
    else {
        //alert('update' + clientID);
        url =base_url +'/BAKCLAW/parasys/Parasys_view/cleint_update/'+ clientID;   
    }

    // ajax adding data to database
  
        var data = $("#insert_form").serialize();
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

                    clientTable.ajax.reload(null, false);
                    if(save_method == 'add'){
                        $("#insert_form")[0].reset();
                        $(".form-group").removeClass('has-error').removeClass('has-success');
                        $(".text-danger").remove();	
                       // $("#add-class-messages").html('');
                    } else{
                        $("#add-class-messages").html('');
                        $("#insert_form")[0].reset();
                        $(".form-group").removeClass('has-error').removeClass('has-success');
                        $(".text-danger").remove();	
                        $('#ModalExample').modal('hide');

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

function get_clientforUpdate(id) {
   save_method = 'update';
    $('#insert_form')[0].reset(); // reset form on modals
    //Ajax Load data from ajax
    clientID=id;
    $.ajax({
        url: base_url+'/BAKCLAW/parasys/Parasys_view/ajax_edit_client/' + id,
        type: "GET",
        dataType: "JSON",
        success: function (data) {

            $('[name="clientid"]').val(data.CLIENT_ID);
            $('[name="clientname"]').val(data.CLIENT_NAME);
            $('[name="clientsex"]').val(data.CLIENT_SEX);
            $('[name="clientage"]').val(data.CLIENT_AGE);
            $('[name="clientaddress"]').val(data.CLIENT_ADD);
            $('[name="clienttel"]').val(data.CLIENT_TEL);
            $('[name="clientidcard"]').val(data.CLIENT_NAT_ID);


            $('#ModalExample').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Client'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
        }
    });
}

