<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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

	$this->load->model('Users_model');
	$this->load->model('Authorisation_model');
	$this->load->model('Departments_model');
	$this->load->model('Permission_model');
	//$this->load->library('../controllers/Permission');
	$this->permission = $this->Authorisation_model->get_permIDs_by_user($_SESSION['logged_in']['id']);

}	
	
	public function create_user()
	{
		if($this->input->post('username')&&$this->input->post('passwd')&&$this->input->post('staffid'))	
		{	$data = array();      // array to pass back data
			$data['username'] = $this->input->post('username');
			$data['passwd'] = $this->input->post('passwd');
			$data['staffid'] = $this->input->post('staffid');
			$data['name'] = $this->input->post('name');
			$data['modidate'] = date('d-m-Y g:i a');
			$data['dep_id'] = $this->input->post('dep');
			$data['isActive'] = 1;
			$data['message'] = "posted successfully!";		
			 //insert user into db
			echo json_encode($this->Users_model->insert($data)); //reply back to client
		}
	}
	public function authorise_user()
	{
		if($this->input->post('user')&&$this->input->post('perm'))	
		{	$data = array();      // array to pass back data
			$data['USER_ID'] = $this->input->post('user');
			$data['PERMIS_ID'] = $this->input->post('perm');
			$data['MODIDATE'] = date('d-m-Y g:i a');	
			 //insert user into db
			echo json_encode($this->Authorisation_model->insert($data)); //reply back to client
		}
	}
	public function index()
	{

		$data['page_title'] = $this->lang->line('users_menu').' - '.$this->lang->line('users_menu_list');
		$data['user_list'] = $this->Users_model->get_authorised_users();
		$data['dep_list'] = $this->Departments_model->get_data();
		$data['permission'] = $this->permission;
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar', $data);
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/users', $data);
		$this->load->view('html/admin/templates/footer');
	}
	
	public function new_user_form()
	{
		$data['page_title'] = $this->lang->line('users_menu').' - '.$this->lang->line('users_menu_add');
		$data['dep_list'] = $this->Departments_model->get_data();
		$data['permission'] = $this->permission;
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/new_user_form');
		$this->load->view('html/admin/templates/footer');
	}
	
	public function view_user_roles()
	{
		$data['page_title'] = $this->lang->line('users_menu').' - '.$this->lang->line('users_auth_list');
		$data['auth_list'] = $this->Authorisation_model->get_data();
		$data['user_list'] = $this->Users_model->get_data();
		$data['role_list'] = $this->Permission_model->get_data();
		$data['permission'] = $this->permission;

		if($this->Authorisation_model->is_super($data['permission'])){		
			$this->load->view('html/admin/templates/header', $data);
			$this->load->view('html/admin/templates/sidebar');
			$this->load->view('html/admin/templates/menu_footer.php');
			$this->load->view('html/admin/templates/top_navigation.php');
			$this->load->view('html/admin/user_roles');
			$this->load->view('html/admin/templates/footer');
		}else{
			exit('Permission Denied!');
		}
		
	}
	
	public function change_passwd_form()
	{
		$data['page_title'] = $this->lang->line('users_menu').' - '.$this->lang->line('change_passwd');
		$data['permission'] = $this->permission;
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/change_passwd');
		$this->load->view('html/admin/templates/footer');
				
	}
	
	public function change_passwd()
	{
		if($this->input->post('username')&&$this->input->post('passwd')&&$this->input->post('newpasswd'))	
		{				
			$passwd = $this->input->post('passwd');
			$newpasswd = $this->input->post('newpasswd');
			$id = $_SESSION['logged_in']['id'];

			if($this->Users_model->verify_password($id,$passwd))
			{
				$data = array();				
				$data['USER_PASSWORD'] = $newpasswd;
				echo json_encode($this->Users_model->update($id,$data));
			}else{
				$error = array();
				$error["message"] = "Error while changing password!";
				echo json_encode($error);	
			}
			//reply back to client
		}
	}

}
