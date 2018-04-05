<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lawyers extends CI_Controller {
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
	
	if(!$this->Authorisation_model->is_admin($this->permission)){	
		exit('Permission Denied!');
	}

}	

//SAVE
public function save()
{
	$data = $_POST['data'];
	$lawyer = array();
	$result = array();
	$result1 = "";
	$result2 = "";
	$result3 = "";
	$result4 = "";
	$return_id = 0;
	$is_profile_post = 0; 

	//Check if received POST from Lawyer's Profile
	if($data['nameeng']&&$data['namekh']&&$data['dob']&&$data['id'])
	{
		$this->load->model('Lawyers_model');
		$lawyer['lawyer_name_en'] = $data['nameeng'];
		$lawyer['lawyer_name_kh'] = $data['namekh'];
		$lawyer['lawyer_dob'] = $data['dob'];
		$lawyer['modidate'] = date('d-m-Y g:i a');
		$lawyer['lawyer_code'] = $data['id'];
		$temp_result = $this->Lawyers_model->insert($lawyer);
		//if succesfully saved profile in the DB
		if($temp_result["message"]=="success"){
			$return_id = $temp_result["return_id"];
			$is_profile_post = 1;
			$result1 = json_encode($temp_result);
			error_log(date('d-m-Y g:i a')." ".$result1."\r\n", 3, "audit.log");	
		}		
	}else{
		$error["message"] = "Information is required!";
		$result1 = json_encode($error);
	}
	//Check if received POST from Discipline
	if($is_profile_post == 1)
	{
		//Insert Professional Conditions
		//It still inserts data into DB regardless the non-value data
		$this->load->model('Professional_conditions_model');
		$pc = array();

		$pc['lawyer_id'] = $return_id; 
		//2.1
		$pc['date_of_completion'] = $data['date_of_completion'];
		$pc['date_of_prob'] = $data['date_of_prob'];
		$pc['is_pursue_study'] = $data['pursue_study'];
		$pc['date_of_fulltime'] = $data['date_of_fulltime'];
		//2.2
		$pc['date_of_righteousness'] = $data['fairness_date'];
		$pc['date_of_without_righteousness'] = $data['fairness_verdict'];
		$pc['date_of_prob_righteousness'] = $data['probation_date'];
		$pc['no_prob_righteousness'] = $data['probabtion_verdict'];
		$pc['fulltime_approval'] = $data['fulltime_verdict'];
		//2.3
		$pc['firm_name'] = $data['firm_name'];
		$pc['authorisation_number'] = $data['approval_id'];
		$pc['permission_number'] = $data['approval_number'];
		$pc['firm_validity'] = $data['date_of_validity'];
		//2.4
		$pc['out_bar_validity'] = $data['date_of_out_validity'];
		$pc['out_bar_decision'] = $data['date_of_verdict'];
		//2.5
		$pc['prohibition_statement'] = $data['final_statement'];

		$pc['modidate'] = date('d-m-Y g:i a');

		error_log(date('d-m-Y g:i a')." ".json_encode($pc)."\r\n", 3, "audit.log");
		$result4 = json_encode($this->Professional_conditions_model->insert($pc));
		

		if($data['class_hours'])
		{
			$edu = array();
			$this->load->model('Continuing_education_model');
			foreach($data['class_hours'] as $hour)
			{
				if($hour != "")
				{
					$edu['lawyer_id'] = $return_id;	
					$edu['number_of_hours'] = $hour;
					$edu['date_of_study'] = date('d-m-Y g:i a');	
					$edu['modidate'] = date('d-m-Y g:i a');
					$result2 = json_encode($this->Continuing_education_model->insert($edu));
					error_log(date('d-m-Y g:i a')." ".json_encode($edu)."\r\n", 3, "audit.log");
				}
			}
			
		}


		if($data['is_sued'])
		{
			$discipline = array();
			$this->load->model('Discipline_model');
			//$discipline['lawyer_code'] = $data['id'];
			$discipline['lawyer_id'] = $return_id;
			$discipline['complaint_desc'] = $data['complaint_des'];
			$discipline['end_compliant_by_president'] = $data['end_compliant_by_president'];
			$discipline['is_inspection'] = $data['to_be_inspected'];
			$discipline['complaints_path'] = "";
			$discipline['cd_id'] = $data['council_decision']?$data['council_decision']:0;
			$discipline['modidate'] = date('d-m-Y g:i a');
			error_log(date('d-m-Y g:i a')." ".json_encode($discipline)."\r\n", 3, "audit.log");
			$result3 = json_encode($this->Discipline_model->insert($discipline));
		}
	}

	$result['lawyers'] = $result1;
	$result['education'] = $result2;
	$result['discipline'] = $result3;
	$result['conditions'] = $result4;
	error_log(date('d-m-Y g:i a')." ".json_encode($result)."\r\n", 3, "audit.log");
	echo json_encode($result);
}	
//END SAVE
	public function index()
	{

		$data['page_title'] = $this->lang->line('lawyer_menu').' - '.$this->lang->line('lawyer_menu_add');
		$data['permission'] = $this->permission;
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/new_lawyer_form1');
		$this->load->view('html/admin/templates/footer');
	}
	
	public function view_profiles()
	{

		$this->load->model('Lawyers_model');
		$this->load->model('Council_decision_model');
		$data['page_title'] = $this->lang->line('lawyer_menu').' - '.$this->lang->line('lawyer_menu_profiles');
		$data['permission'] = $this->permission;
		$data['lawyers'] = $this->Lawyers_model->get_data();
		$data['council_decision'] = $this->Council_decision_model->get_data();
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/profiles');
		$this->load->view('html/admin/templates/footer');		
		
	}

	public function view_profile($id)
	{
		$this->load->model('Lawyers_model');
		$this->load->model('Continuing_education_model');
		$this->load->model('Professional_conditions_model');
		$this->load->model('Discipline_model');
		$data['page_title'] = $this->lang->line('lawyer_menu').' - '.$this->lang->line('lawyer_menu_profiles');
		$data['permission'] = $this->permission;
		$data['lawyer'] = $this->Lawyers_model->get_data_by_id($id);
		$data['conditions'] = $this->Professional_conditions_model->get_data_by_id($id);
		$data['education'] = $this->Continuing_education_model->get_data_by_id($id);
		$data['discipline'] = $this->Discipline_model->get_data_by_id($id);
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/view_profile');
		$this->load->view('html/admin/templates/footer');		
		
	}

	public function edit_profile($id)
	{
		$this->load->model('Lawyers_model');
		$this->load->model('Continuing_education_model');
		$this->load->model('Professional_conditions_model');
		$this->load->model('Discipline_model');

		$data['page_title'] = $this->lang->line('lawyer_menu').' - '.$this->lang->line('lawyer_menu_profiles');
		$data['permission'] = $this->permission;
		$data['lawyer'] = $this->Lawyers_model->get_data_by_id($id);
		$data['conditions'] = $this->Professional_conditions_model->get_data_by_id($id);
		$data['education'] = $this->Continuing_education_model->get_data_by_id($id);
		$data['discipline'] = $this->Discipline_model->get_data_by_id($id);
		$data['permission'] = $this->permission;
		$data['id'] = $id;
		
	//	$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/edit_profile',$data);
	//	$this->load->view('html/admin/templates/footer');
	}


	public function load_data_table()
	{
		$this->load->model('Lawyers_model');
		$data['lawyers'] = $this->Lawyers_model->get_data();
		$this->load->view('html/admin/loads/load_lawyer_table',$data);
	} 
}
