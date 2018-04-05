<?php

class CaseRegis_Controller extends CI_Controller{

    private $permission = array();
    public function __construct(){
	parent::__construct();
	$this->load->helper('url'); // Load URL Helper for base_url() 
	$this->load->helper('html'); // Load HTML Helper for img()
	$this->load->model('CaseRegis_model');
	$this->load->library('form_validation');
	$this->load->helper('security');
	if(!$this->session->userdata('logged_in'))
	{
		redirect('', 'refresh');
    }
}
// ================= Function to display Case Registration ===============================
public function dashboardlaid()
	{
		$this->load->model('Lawyers_model');
		$this->load->model('Parasys_model');
		$this->load->model('Council_decision_model');
		$data['cases'] = $this->Parasys_model->fetchCasePara();
		$data['courts']= $this->Parasys_model->fetchCourt();
		$data['issues']= $this->Parasys_model->fetchIssue();
		$data['page_title'] = $this->lang->line('lawyer_menu').' - '.$this->lang->line('lawyer_menu_profiles');
		$data['permission'] = $this->permission;
		$data['lawyers'] = $this->Lawyers_model->get_data();
		$data['council_decision'] = $this->Council_decision_model->get_data();
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/dashboardlaid.php');
		$this->load->view('html/admin/templates/footer');		
		
	}
// ============== Select In formation of Case Registration ====================================
public function fetchAllCaseRegis(){
	$caseRegis = $this->CaseRegis_model->fetchAllCassRegis();
		$result = array('data'=>array());
		//$x=1;
		foreach ($caseRegis as $key => $value) {

		$button = '<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				       Action   <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">			  	
				    <li><a href="#" data-toggle="modal" data-target="#editStudentModal" onclick="updateStudent('.$value['caseid'].')">កែប្រែសំណុំរឿង</a></li>
					<li><a href="#" data-toggle="modal" data-target="#removeStudentModal" onclick="removeStudent('.$value['caseid'].')">Delete Case</a></li>
					<li><a href="#" data-toggle="modal" data-target="#removeStudentModal" onclick="showClient()">បង្កើតកូនក្តី</a></li>				    
					<li><a href="#" data-toggle="modal" data-target="#removeStudentModal" onclick="removeStudent('.$value['caseid'].')">បង្កើតភាគីបណ្តឹង</a></li>
					<li><a href="#" data-toggle="modal" data-target="#removeStudentModal" onclick="removeStudent('.$value['caseid'].')">ទទួលរឿងក្តីពី</a></li>				    
				  </ul>
				</div>';

			$result['data'][$key] = array(
					//$x,
					$button,
					$value['caseno'],
					$value['dateregis'],
					$value['typeofcase'],
					$value['accusations'],
					$value['getfrom'],
					$value['casenote'],
					
				);
				//$x++;
		}/// foreach
	
		echo json_encode($result);
}
}

?>