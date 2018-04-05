<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	 
	class VerifyLogin extends CI_Controller {
	 
	 function __construct()
	 {
		 parent::__construct();
		 $this->load->helper('url'); // Load URL Helper for base_url() 
		 $this->load->helper('html'); // Load HTML Helper for img()
	   $this->load->model('Users_model','',TRUE);
	 }
	 
	 function index()
	 {
	   //This method will have the credentials validation
	   $this->load->library('form_validation');
	 
	   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('passwd', 'Password', 'trim|required|xss_clean|callback_check_database');
	 
		 //echo $this->form_validation->run();
	   if($this->form_validation->run() == FALSE)
	   {
	     //Field validation failed.  User redirected to login page
		   $this->load->view('html/login');
		 //echo "suss";
	   }
	   else
	   {
			 //Go to private area
		//	 redirect('administrator', 'refresh');
			 header('location:administrator');
	   }
	 
	 }

	 public function logout()
	 {
		 $this->session->unset_userdata('logged_in');
		 $this->session->sess_destroy();
		 redirect('', 'refresh');
	 }
	 
	 function check_database($password)
	 {
	   //Field validation succeeded.  Validate against database
	   $username = $this->input->post('username');
	// echo $username."-".$password;
	   //query the database
	   $result = $this->Users_model->login($username, $password);
	// print_r($result);
	   if($result)
	   {
	     $sess_array = array();
	     foreach($result as $row)
	     {

	       $sess_array = array(
	         'id' => $row->USER_ID,
	         'username' => $row->USER_NAME
				 );
				 				 
				 $this->session->set_userdata('logged_in', $sess_array);
				 
			 }


			 //print_r($sess_array);
	     return TRUE;
	   }
	   else
	   {
	     $this->form_validation->set_message('check_database', 'Invalid username or password');
	     return false;
	   }
	 }
	}
	?>