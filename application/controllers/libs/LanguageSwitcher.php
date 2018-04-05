<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LanguageSwitcher extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->lang->load('message','khmer');

}	
	
    function switchLang($language = "") {
        
        $language = ($language != "") ? $language : "english";
        $this->session->set_userdata('site_lang', $language);
        header('location:'.$_SERVER['HTTP_REFERER']);
      //  redirect($_SERVER['HTTP_REFERER']);
        
    }
	
}
?>