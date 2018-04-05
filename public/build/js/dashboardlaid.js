var save_method; //for save method string
var maintableLAID;
//ar base_url = $("#base_url").val();
var base_url = window.location.origin;
var LigalAIDID;

$(document).ready(function(){

     
   // alert(base_url);
    maintableLAID = $("#maintableLAID").DataTable({
          'ajax': base_url +'/BAKCLAW/CaseRegis_Controller/fetchAllCaseRegis','order':[]
      });
  }); //end document

function ShowCaseRegis(){
    save_method = 'add';
    $('#formLAID')[0].reset(); // reset form on modals
    $('#ModalCaseRegis').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
}

function showClient(){
    //save_method="add";
    $('#forclient')[0].reset();
    $('#ModalClient').modal('show');
}

