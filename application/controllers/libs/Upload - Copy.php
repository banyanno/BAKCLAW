<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$FILE_TYPE_LIST = array(".pdf",".doc",".docx",".jpg",".jpeg");
}	
	

public function upload($file)
{
	$file_ext = $this->get_file_ext($file);
	
	if($this->validate($file_ext))
	{
		
		//Upload file
		
	}
	
}

private function validate($file_ext)
{
	if(in_array($file_ext,$FILE_TYPE_LIST))
		return true;
	
	return false;
	
}

private function get_file_ext($file)
{
	
	return "pdf";
	
}
	
	
}
