<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	private $permission = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); // Load URL Helper for base_url() 
		$this->load->helper('html'); // Load HTML Helper for img()

		if(!$this->session->userdata('logged_in'))
		{
			redirect('', 'refresh');
		}
		$this->load->model('Authorisation_model');

		$this->permission = $this->Authorisation_model->get_permIDs_by_user($_SESSION['logged_in']['id']);
	}	
	
	public function index()
	{
		
		$this->load->helper('url');
		$this->load->helper('html'); 
		$data['page_title'] = "Dashboard";
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/index');
		$this->load->view('html/admin/templates/footer');
	}
	
	
	public function view()
	{
		$this->load->helper('url');
		$this->load->helper('html'); 
		$data['page_title'] = "Dashboard";
		$data['permission'] = $this->permission;
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar', $data);
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/index2');
		$this->load->view('html/admin/templates/footer');				
	}
	
}
