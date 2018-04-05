$(document).ready(function () {

    $( "#change_passwd" ).click(function() {
       
       var username = $('input[name=username]').val();
       var passwd = $('input[name=passwd]').val();
       var newpasswd = $('input[name=newpasswd]').val();

        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'http://localhost:8080/BAKCLAW/administrator/change_passwd_post', // the url where we want to POST
            data        : {
                            username:username,passwd:passwd,newpasswd:newpasswd
                        }, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
            encode          : true
        })
            // using the done promise callback
            .done(function(data) {
                //console.log(data); 
                alert(data.message);
                // here we will handle errors and validation messages
            });

    }); //end change passwd

    $( "#create_user" ).click(function() {
       
        var username = $('input[name=username]').val();
        var passwd = $('input[name=passwd]').val();
        var name = $('input[name=name]').val();
        var staffid = $('input[name=staff-id]').val();
      //  var gender = $('input[name=gender]:checked').val();
        var dep = $('select[name=dep]').val();
      // alert(dep);
       // var gender = $('#gender option:selected').val();
 
         $.ajax({
             type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
             url         : 'http://localhost:8080/BAKCLAW/administrator/create_user_post', // the url where we want to POST
             data        : {
                             username:username,passwd:passwd,name:name,
                             staffid:staffid,dep:dep
                         }, // our data object
             dataType    : 'json', // what type of data do we expect back from the server
             encode          : true
         })
             // using the done promise callback
             .done(function(data) {
                 //console.log(data);
                 alert("hello"); 
                 alert(data.message + "\n");
                 // here we will handle errors and validation messages
             });
 
     }); //end create user

     $( "#authorise_user" ).click(function() {
        var user = $('select[name=user]').val();
        var perm = $('select[name=perm]').val();
       
         $.ajax({
             type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
             url         : 'http://localhost:8080/BAKCLAW/administrator/auth_user_post', // the url where we want to POST
             data        : { user:user,perm:perm }, // our data object
             dataType    : 'json', // what type of data do we expect back from the server
             encode          : true
         })
             // using the done promise callback
             .done(function(data) {
                 //console.log(data);
                 alert(data.message + "\n");
                 // here we will handle errors and validation messages
             });
 
     }); //end create user

});