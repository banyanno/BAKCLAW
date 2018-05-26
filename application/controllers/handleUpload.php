<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class handleUpload extends CI_Controller {
	
public function __construct() {
    parent::__construct();

    // load base_url
    $this->load->helper('url');
}
public function index(){
		 
$data = array();
if(isset($_FILES))
{  
	$error = false;
	$files = array();
	$uploaddir = './uploads/';
	foreach($_FILES as $file)
	{
		if(move_uploaded_file($file['tmp_name'], $uploaddir .basename($file['name'])))
		{
			$files[] = $uploaddir .$file['name'];
		}
		else
		{
		    $error = true;
		}
	}
	$data = ($error) ? array('error' => 'There was an error uploading your files') : array('files' => $files);
}
else
{
	$data = array('success' => 'Form was submitted', 'formData' => $_POST);
}
echo json_encode($data);
}
}
