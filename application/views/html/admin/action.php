<?php

  //  $result = "";
    $data = $_POST['data'];
    error_log($_POST['data']['namekh']."\r\n", 3, "audit.log");
   // error_log(json_encode($_POST['data']['is_sued'])."\r\n", 3, "audit.log");
   // error_log(json_encode($_POST['data']['compliant_des'])."\r\n", 3, "audit.log");
    //error_log(json_encode($_POST['data']['end_compliant_by_president'])."\r\n", 3, "audit.log");
    //log_message('info', 'The purpose of some variable is to provide some value.',"audit.log");
    // return all our data to an AJAX call
    echo json_encode($_POST['data']);
    

?>