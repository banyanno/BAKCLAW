$(document).ready(function () {

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

var namekh = $('input[name=namekh]').val();
var nameeng = $('input[name=nameeng]').val();
var dob = $('input[name=dob]').val();
var id = $('input[name=id]').val();
//២.១ វិញ្ញាបនប័ត្រសម្បទាវិជ្ជាជីវៈមេធាវី
var end_cert = $('input[name=end_cert]').val();
var date_of_completion = $('input[name=date_of_completion]').val();
//២.១.២	ចប់កម្មសិក្សា 
var end_prob = $('input[name=end_prob]').val();
var date_of_prob = $('input[name=date_of_prob]').val();
//២.១.៣	កម្មសិក្សាត្រូវបន្ត
var pursue_study = $('input[name=pursue_study]').val();
//២.១.៤	ក្រុមប្រឹក្សាអនុម័តឲ្យប្រកបពេញសិទ្ធិ 
var is_fulltime = $('input[name=is_fulltime]').val();
var date_of_fulltme = $('input[name=date_of_fulltme]').val();
//2.2
var fairness = $('input[name=fairness]').val();
var fairness_date = $('input[name=fairness_date]').val();
var date_of_fulltme = $('input[name=date_of_fulltme]').val();
//២.២.២	លើកលែងបំពេញសុក្រិត្យការ 
var without_fairness = $('input[name=without_fairness]').val();
var fairness_verdict = $('input[name=fairness_verdict]').val();
//2.2.3
var probation = $('input[name=probation]').val();
var probation_date = $('input[name=probation_date]').val();
//២.២.៥	មិនបាច់ធ្វើកម្មសិក្សា
var no_probabtion = $('input[name=no_probabtion]').val();
var probabtion_verdict = $('input[name=probabtion_verdict]').val();
//2.2.6
var allow_fulltime = $('input[name=allow_fulltime]').val();
var fulltime_verdict = $('input[name=fulltime_verdict]').val();
//២.៣	ការប្រកបវិជ្ជាជីវៈ
var firm_name = $('input[name=firm_name]').val();
var approval_id = $('input[name=approval_id]').val();
//
var compliant_des = [];
//alert(namekh+nameeng);
$("input[name='compliant_des']").each(function(){
    compliant_des.push(this.value);
});
//alert("Posted");
// process the form
$.ajax({
    type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
    url         : 'http://localhost/BAKCLAW/administrator/lawyer/save', // the url where we want to POST
    data        : {
                    namekh:namekh,nameeng:nameeng,dob:dob,id:id,
                    end_cert:end_cert,date_of_completion:date_of_completion,
                    end_prob:end_prob,date_of_prob:date_of_prob,pursue_study:pursue_study,
                    is_fulltime:is_fulltime,date_of_fulltme:date_of_fulltme

                    compliant_des:compliant_des,
                   
                }, // our data object
    dataType    : 'json', // what type of data do we expect back from the server
    encode          : true
})
    // using the done promise callback
    .done(function(data) {

        // log data to the console so we can see
        //console.log(data); 
        alert(data.nameeng + ", " + data.namekh + ',' +data.compliant_des);
        // here we will handle errors and validation messages
    });

// stop the form from submitting the normal way and refreshing the page
event.preventDefault();

///////////


  });
//ddddd


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