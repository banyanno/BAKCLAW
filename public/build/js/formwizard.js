$(document).ready(function () {
    $('#date_of_completion').attr('disabled', '');
    $('#date_of_prob').attr('disabled', '');
    $('#date_of_fulltime').attr('disabled', '');
    $('#fairness_date').attr('disabled', '');
    $('#fairness_verdict').attr('disabled', '');
    $('#probation_date').attr('disabled', '');
    $('#probabtion_verdict').attr('disabled', '');
    $('#fulltime_verdict').attr('disabled', '');
    $('#date_of_out_validity').attr('disabled', '');
    $('#date_of_verdict').attr('disabled', '');

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

//eddd

$('#end_cert').click (function () {
    if($('input[name=end_cert]').is(":checked")) {
        //remove disabled
        $('#date_of_completion').removeAttr('disabled');       
    } else {
        //disable text       
        $('#date_of_completion').attr('disabled', '');
    }
});

$('#end_prob').click (function () {
    if($('input[name=end_prob]').is(":checked")) {
        //remove disabled
        $('#date_of_prob').removeAttr('disabled');       
    } else {
        //disable text       
        $('#date_of_prob').attr('disabled', '');
    }
});

$('#is_fulltime').click (function () {
    if($('input[name=is_fulltime]').is(":checked")) {
        //remove disabled
        $('#date_of_fulltime').removeAttr('disabled');       
    } else {
        //disable text       
        $('#date_of_fulltime').attr('disabled', '');
    }
});

$('#fairness').click (function () {
    if($('input[name=fairness]').is(":checked")) {
        //remove disabled
        $('#fairness_date').removeAttr('disabled');       
    } else {
        //disable text       
        $('#fairness_date').attr('disabled', '');
    }
});

///////

$('#without_fairness').click (function () {
    if($('input[name=without_fairness]').is(":checked")) {
        //remove disabled
        $('#fairness_verdict').removeAttr('disabled');       
    } else {
        //disable text       
        $('#fairness_verdict').attr('disabled', '');
    }
});
////
$('#probation').click (function () {
    if($('input[name=probation]').is(":checked")) {
        //remove disabled
        $('#probation_date').removeAttr('disabled');       
    } else {
        //disable text       
        $('#probation_date').attr('disabled', '');
    }
});
/////
$('#no_probabtion').click (function () {
    if($('input[name=no_probabtion]').is(":checked")) {
        //remove disabled
        $('#probabtion_verdict').removeAttr('disabled');       
    } else {
        //disable text       
        $('#probabtion_verdict').attr('disabled', '');
    }
});
////
$('#allow_fulltime').click (function () {
    if($('input[name=allow_fulltime]').is(":checked")) {
        //remove disabled
        $('#fulltime_verdict').removeAttr('disabled');       
    } else {
        //disable text       
        $('#fulltime_verdict').attr('disabled', '');
    }
});
/////
$('#follow_proposal').click (function () {
    if($('input[name=follow_proposal]').is(":checked")) {
        //remove disabled
        $('#date_of_out_validity').removeAttr('disabled');       
    } else {
        //disable text       
        $('#date_of_out_validity').attr('disabled', '');
    }
});
//////
$('#is_out').click (function () {
    if($('input[name=is_out]').is(":checked")) {
        //remove disabled
        $('#date_of_verdict').removeAttr('disabled');       
    } else {
        //disable text       
        $('#date_of_verdict').attr('disabled', '');
    }
});


$('#bs-edit-modal-lg').on('hidden.bs.modal', function() {
  //  $(this).removeData('bs.modal');
   // $(this).removeData('bs-edit-modal-lg');
    location.reload(true);
  //  var modal = $(this);
   // modal.affix('checkPosition');
   // modal.find('.modal-body').html('');
//    $(this).find("input,textarea,select,label").val('').end();
    });
////


//ddddd
$(".add-more").click(function(){ 

    var html = $(".copy").html();

    $(".after-add-more").after(html);

});
//////
$(".add-edu-more").click(function(){ 

    var html = $(".copy-edu").html();

    $(".after-add-edu-more").after(html);

});

/////////////
$("body").on("click",".remove",function(){ 

    $(this).parents(".form-group").remove();

});


$( "#go" ).click(function() {

var class_hours = [];

    $("input[name='class_hours']").each(function(){
        class_hours.push(this.value);
    });
//alert($("#complaint_des").val());
var data_collection = { 
    'namekh' : $('input[name=namekh]').val(),
    'nameeng' : $('input[name=nameeng]').val(),
    'dob' : $('input[name=dob]').val(),
    'id' : $('input[name=id]').val(),
    //២.១ វិញ្ញាបនប័ត្រសម្បទាវិជ្ជាជីវៈមេធាវី
    'end_cert' : $('input[name=end_cert]').val(),
    'date_of_completion' : $('input[name=date_of_completion]').val(),
    //២.១.២	ចប់កម្មសិក្សា 
    'end_prob' : ($('input[name=end_prob]').is(":checked"))? "1":"0",
    'date_of_prob' : $('input[name=date_of_prob]').val(),
    //២.១.៣	កម្មសិក្សាត្រូវបន្ត
    'pursue_study' : ($('input[name=pursue_study]').is(":checked"))? "1":"0",
    //២.១.៤	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ 
    'is_fulltime' : ($('input[name=is_fulltime]').is(":checked"))? "1":"0",
    'date_of_fulltime' : $('input[name=date_of_fulltime]').val(),
    //2.2
    'fairness' : ($('input[name=fairness]').is(":checked"))? "1":"0",
    'fairness_date' : $('input[name=fairness_date]').val(),
    //២.២.២	លើកលែងបំពេញសុក្រិត្យការ 
    'without_fairness' : ($('input[name=without_fairness]').is(":checked"))? "1":"0",
    'fairness_verdict' : $('input[name=fairness_verdict]').val(),
    //2.2.3
    'probation' : ($('input[name=probation]').is(":checked"))? "1":"0",
    'probation_date' : $('input[name=probation_date]').val(),
    //២.២.៥	មិនបាច់ធ្វើកម្មសិក្សា
    'no_probabtion' : ($('input[name=no_probabtion]').is(":checked"))? "1":"0",
    'probabtion_verdict' : $('input[name=probabtion_verdict]').val(),
    //2.2.6
    'allow_fulltime' : ($('input[name=allow_fulltime]').is(":checked"))? "1":"0",
    'fulltime_verdict' : $('input[name=fulltime_verdict]').val(),
    //២.៣	ការប្រកបវិជ្ជាជីវៈ
    'firm_name' : $('input[name=firm_name]').val(),
    'approval_id' : $('input[name=approval_id]').val(),
	//២.៣.២	លិខិតអនុញ្ញាតឲ្យប្រកបលេខ
	'approval_number' : $('input[name=approval_number]').val(),
	'date_of_validity' : $('input[name=date_of_validity]').val(),
	//២.៤	ការនៅក្រៅបញ្ជីគណៈមេធាវី
	'follow_proposal' : ($('input[name=follow_proposal]').is(":checked"))? "1":"0",
	'date_of_out_validity' : $('input[name=date_of_out_validity]').val(),
	//២.៤.២	តាមសេចក្តីសម្រេចដាក់ឲ្យនៅក្រៅបញ្ជី
	'is_out' : ($('input[name=is_out]').is(":checked"))? "1":"0",
	'date_of_verdict' : $('input[name=date_of_verdict]').val(),
	//២.៥.១	សេចក្តីសម្រេច
	'final_statement' : $('input[name=final_statement]').val(),
	//៣.១ លើកទី ១
	'class_hours' : class_hours, //$('input[name=class_hours]').val(),
	//៤.១ បណ្តឹង
    //'is_sued' : ($('input[name=is_sued]').is(":checked"))? "on":"",
    'is_sued' : ($('input[name=is_sued]').is(":checked"))? "1":"0",
	'complaint_des' : $("#complaint_des").val(),
	//៣.២ សរុបម៉ោងអប់រំបន្តមកទល់បច្ចុប្បន្ន
//	'end_compliant_by_president' : ($('input[name=end_compliant_by_president]').is(":checked"))? "on":"",
    'end_compliant_by_president' :  ($('input[name=end_compliant_by_president]').is(":checked"))? "1":"0",
	'to_be_inspected' : ($('input[name=to_be_inspected]').is(":checked"))? "1":"0",
	//សេចក្តីសម្រេចក្រុមប្រឹក្សា៖ ស្តីបន្ទោសផ្ទាល់មាត់ 
    'council_decision' : ($("input[name='council_decision']:checked").val())?$("input[name='council_decision']:checked").val():"0"
    };
//alert(data_collection.namekh);
// process the form
$.ajax({
    type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
  //  url         : 'http://localhost/BAKCLAW/application/views/html/admin/action.php', // the url where we want to POST
    url         : 'http://localhost:8080/BAKCLAW/administrator/lawyer/save',  
    data        : { 'data' : data_collection }, // our data object
    dataType    : 'json', // what type of data do we expect back from the server
    encode          : true
})
    // using the done promise callback
    .done(function(data) {
      //  alert(data.nameeng + ", " + data.namekh + ',' +data.compliant_des + ','+data.dob+","+data.id);
        // here we will handle errors and validation messages
        alert(JSON.stringify(data));
      //  $(".bs-example-modal-lg").html("");
        //$(this).removeData('bs-example-modal-lg');
        location.reload(true);
    });

// stop the form from submitting the normal way and refreshing the page
event.preventDefault();

  });
//
$( "#update" ).click(function() {
    alert("Update");

    var number_of_hours  = [];

    $("input[name='number_of_hours']").each(function(){
        number_of_hours.push(this.value);
    });

    var data_collection = { 
        'namekh' : $('input[name=namekh]').val(),
        'nameeng' : $('input[name=nameeng]').val(),
        'dob' : $('input[name=dob]').val(),
        'id' : $('input[name=id]').val(),
        //២.១ វិញ្ញាបនប័ត្រសម្បទាវិជ្ជាជីវៈមេធាវី
        'date_of_completion' : $('input[name=date_of_completion]').val(),
        //២.១.២	ចប់កម្មសិក្សា 
        'date_of_prob' : $('input[name=date_of_prob]').val(),
        //២.១.៣	កម្មសិក្សាត្រូវបន្ត
        'is_pursue_study' : ($('input[name=is_pursue_study]').is(":checked"))? "1":"0",
        //២.១.៤	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ 
        'date_of_fulltime' : $('input[name=date_of_fulltime]').val(),
        //2.2
        'date_of_righteousness' : $('input[name=date_of_righteousness]').val(),
        //២.២.២	លើកលែងបំពេញសុក្រិត្យការ 
        'date_of_without_righteousness' : $('input[name=date_of_without_righteousness]').val(),
        //2.2.3
        'date_of_prob_righteousness' : $('input[name=date_of_prob_righteousness]').val(),
        //២.២.៥	មិនបាច់ធ្វើកម្មសិក្សា
        'no_prob_righteousness' : $('input[name=no_prob_righteousness]').val(),
        //2.2.6
        'fulltime_approval' : $('input[name=fulltime_approval]').val(),
        //២.៣	ការប្រកបវិជ្ជាជីវៈ
        'firm_name' : $('input[name=firm_name]').val(),
        'authorisation_number' : $('input[name=authorisation_number]').val(),
        //២.៣.២	លិខិតអនុញ្ញាតឲ្យប្រកបលេខ
        'permission_number' : $('input[name=permission_number]').val(),
        'firm_validity' : $('input[name=firm_validity]').val(),
        //២.៤	ការនៅក្រៅបញ្ជីគណៈមេធាវី
        'out_bar_validity' : $('input[name=out_bar_validity]').val(),
        //២.៤.២	តាមសេចក្តីសម្រេចដាក់ឲ្យនៅក្រៅបញ្ជី
        'out_bar_decision' : $('input[name=out_bar_decision]').val(),
        //២.៥.១	សេចក្តីសម្រេច
        'prohibition_statement' : $('input[name=prohibition_statement]').val(),
        //៣.១ លើកទី ១
        'number_of_hours' : class_hours, //$('input[name=class_hours]').val(),
        //៤.១ បណ្តឹង
        //'is_sued' : ($('input[name=is_sued]').is(":checked"))? "on":"",
        'is_sued' : ($('input[name=is_sued]').is(":checked"))? "1":"0",
        'complaint_des' : $("#complaint_des").val(),
        //៣.២ សរុបម៉ោងអប់រំបន្តមកទល់បច្ចុប្បន្ន
    //	'end_compliant_by_president' : ($('input[name=end_compliant_by_president]').is(":checked"))? "on":"",
        'end_compliant_by_president' :  ($('input[name=end_compliant_by_president]').is(":checked"))? "1":"0",
        'to_be_inspected' : ($('input[name=to_be_inspected]').is(":checked"))? "1":"0",
        //សេចក្តីសម្រេចក្រុមប្រឹក្សា៖ ស្តីបន្ទោសផ្ទាល់មាត់ 
        'council_decision' : ($("input[name='council_decision']:checked").val())?$("input[name='council_decision']:checked").val():"0"
        };

        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
          //  url         : 'http://localhost/BAKCLAW/application/views/html/admin/action.php', // the url where we want to POST
            url         : 'http://localhost/BAKCLAW/administrator/lawyer/update',  
            data        : { 'data' : data_collection }, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode          : true
        })
            // using the done promise callback
            .done(function(data) {
              //  alert(data.nameeng + ", " + data.namekh + ',' +data.compliant_des + ','+data.dob+","+data.id);
                // here we will handle errors and validation messages
                alert(JSON.stringify(data));
              //  $(".bs-example-modal-lg").html("");
                //$(this).removeData('bs-example-modal-lg');
                location.reload(true);
            });
        


});   
//
$('#edit-modal').click (function () {
//alert("hello");
var id = $(this).attr("data-id");
    
   // alert(id);
}); 
//////


$('#bs-edit-modal-lg').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
 //   var recipient = button.data('whatever') // Extract info from data-* attributes
    var modal = $(this);
  //  $("#txtname").focus();
   // var id = $(this).data("data-id");
   var id = button.attr("data-id");
    var dataString = 'id={' + id +'}';
 //   alert(id);
      $.ajax({
          type: "POST",
          url: "http://localhost/BAKCLAW/administrator/edit_profile/"+id,
          data: dataString,
          cache: false,
          success: function (data) {
              console.log(data);
              modal.find('.modal-body').html(data);
          },
          error: function(err) {
              console.log(err);
          }
      });  
});
////
    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});