<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inspection extends CI_Controller {

public function __construct()
{
	parent::__construct();
//	$this->load->model('users_model');
	$this->load->helper('url'); // Load URL Helper for base_url() 
	$this->load->helper('html'); // Load HTML Helper for img()

	if(!$this->session->userdata('logged_in'))
	{
		redirect('', 'refresh');
	}

	$this->load->model('Authorisation_model');
	$this->permission = $this->Authorisation_model->get_permIDs_by_user($_SESSION['logged_in']['id']);
	
	if(!$this->Authorisation_model->is_inspect($this->permission)){	
		exit('Permission Denied!');
	}
}	

	public function save()
	{
/*		if($this->input->post('staffid') && $this->input->post('username') && $this->input->post('password'))
		{
				$data['staffid'] = $this->input->post('staffid');
				$data['username'] = $this->input->post('username');
				$data['password'] = $this->input->post('password');
				$data['role'] = $this->input->post('role');
				date_default_timezone_set("Pacific/Auckland");
				$data['modidate'] = date('d-m-Y g:i a');
				$data['isActive'] = 1; 
				echo $this->users_model->insert($data);			
		}*/


	}	
	public function index()
	{

		//$data['page_title'] = "Lawyers - Add New Lawyer";
		$data['page_title'] = $this->lang->line('inspection_list');
		$data['permission'] = $this->permission;
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar', $data);
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/inspection_list');
		$this->load->view('html/admin/templates/footer');
	}
	
	public function index1()
	{

		//$data['page_title'] = "Lawyers - Add New Lawyer";
		$data['page_title'] = $this->lang->line('inspection_list');
		$data['permission'] = $this->permission;
		$this->load->view('html/admin/inspection_list',$data);
	}	
	
}
