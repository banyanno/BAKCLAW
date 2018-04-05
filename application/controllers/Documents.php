<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documents extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->helper('url'); // Load URL Helper for base_url() 
	if(!$this->session->userdata('logged_in'))
	{
		redirect('', 'refresh');
	}

	$this->load->model('Authorisation_model');
	$this->permission = $this->Authorisation_model->get_permIDs_by_user($_SESSION['logged_in']['id']);
	
	if(!$this->Authorisation_model->is_admin($this->permission)){	
		exit('Permission Denied!');
	}

}	

public function view_doc_status()
{
		$data['page_title'] = $this->lang->line('inspection_menu').' - '.$this->lang->line('processing_doc');
		$data['permission'] = $this->permission;
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/document_status');
		$this->load->view('html/admin/templates/footer');	
	
}
	
public function send_to_inspection()
{
	
	
}

public function send_to_admin()
{
	
	
}
	
	
}
