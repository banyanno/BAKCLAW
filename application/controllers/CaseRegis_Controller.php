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
//================= Call dashboard Case Registration ===============================
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

// ============== Start module Case Registration ====================================
public function insertNewCaseRegis()
{
	$validator = array('success'=>false,'message'=>array());
	/*$validate_data=array(
		array(
			'field' => 'clientsex',
			'label' => 'Client Sex',
			'rules' => 'required'
		),
		array(
			'field' => 'clientname',
			'label' => 'Client Name',
			'rules' => 'required'
		)
	);*/
	//$this->form_validation->set_rules();
	//$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
	
	//if ($this->input->post('clientname') && $this->input->post('clientsex') && $this->input->post('clientage') )
	//if($this->form_validation->run() === true) 
	//{
		$data = array();
		$data['caseno'] =$this->input->post('caseno');
		$data['dateregis']=$this->input->post('dateregis');
		$data['typeofcase']=$this->input->post('typeofcase');
		$data['accusations']=$this->input->post('accusations');
		$data['getfrom']=$this->input->post('getfrom');
		$data['casenote']=$this->input->post('casenote');
		//$data['message'] = "posted successfully!";	
		//$this->Parasys_model->insertClient($data);
		//echo json_encode ($this->Parasys_model->insertClient($data));
		//error_log(json_encode($data),3,"yano.log");
		$insertstatus = $this->CaseRegis_model->insertCaseRegis($data);
		if ($insertstatus===true){
			$validator['success'] = true;
			$validator['messages'] = "Successfully added case register";
		}else {
			$validator['success'] = false;
			$validator['messages'] = "Error while inserting the information into the database";
			
		}
		//echo json_encode($data);

		//if ($insertstatus){
			//echo "Success";
		//}
	/*}else {
		$validator['success'] = false;
		foreach ($_POST as $key => $value) {
			$validator['messages'][$key] = form_error($key);
		}			
	} // /else
*/
	//echo 'Insert successfull';
	echo json_encode($validator);

}

public function Edit_CaseRegist($caseID){
	//echo $clientid;
	   $validator = array('success' => false, 'messages' => array());
	   $data = array();
	   $data['caseno'] =$this->input->post('caseno');
	   $data['dateregis']=$this->input->post('dateregis');
	   $data['typeofcase']=$this->input->post('typeofcase');
	   $data['accusations']=$this->input->post('accusations');
	   $data['getfrom']=$this->input->post('getfrom');
	   $data['casenote']=$this->input->post('casenote');

	   $update = $this->CaseRegis_model->Edit_CaseRegist($caseID,$data);
	   
	   if ($update==1){
		   $validator['success'] = true;
		   $validator['messages'] = "Successfully update";
	   
	   }else{
		   $validator['success'] = false;
		   $validator['messages'] = "Error while inserting the information into the database";
	   }
   
	   echo json_encode($validator);
}

public function fetchAllCaseRegis(){
	$caseRegis = $this->CaseRegis_model->fetchAllCassRegis();
		$result = array('data'=>array());
		//$x=1;
		foreach ($caseRegis as $key => $value) {

		$button = '<div class="btn-group">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    បង្កើត<span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">			  	
				    <li><a href="#" data-toggle="modal" data-target="#removeStudentModal" onclick="ShowClientCase('.$value['caseid'].')">បង្កើតកូនក្តី</a></li>				    
					<li><a href="#" data-toggle="modal" data-target="#removeStudentModal" onclick="removeStudent('.$value['caseid'].')">បង្កើតភាគីបណ្តឹង</a></li>
					<li><a href="#" data-toggle="modal" data-target="#removeStudentModal" onclick="removeStudent('.$value['caseid'].')">ទទួលរឿងក្តីពី</a></li>				    
				  </ul>
				</div>';
		$viewdetial = '<!-- Single button glyphicons glyphicons-sort-by-alphabet -->
				<button class="btn btn-warning btn-xs"  onclick="FetchClientByCase('. $value['caseid'] .')"><i class="glyphicon glyphicon-hand-down"></i></button>
				<button class="btn btn-danger btn-xs" onclick="ShowEditeCase('. $value['caseid'] .')"><i class="glyphicon glyphicon-edit"></i></button>
				';
			$result['data'][$key] = array(
					//$x,
					$button,
					$value['caseno'],
					$value['dateregis'],
					$value['typeofcase'],
					$value['accusations'],
					$value['getfrom'],
					$value['casenote'],
					$viewdetial
				);
				//$x++;
		}/// foreach
	
		echo json_encode($result);
}//============================ End load all case register =======================================================

// View by Case ID to update or do something
public function Get_CaseByID($id){
	$caseByID = $this->CaseRegis_model->Get_CaseBy_ID($id);
	echo json_encode($caseByID);
}
//============================= End module Case registration =====================================

/*
	Start Module Cliet that related to case registrator =============================
*/

function InsertClient(){
		$validator = array('success'=>false,'message'=>array());
		$data = array();
		$data['caseregisid'] =$this->input->post('caseregisid');
		$data['clientname']=$this->input->post('clientname');
		$data['clientsex']=$this->input->post('clientsex');
		$data['clientage']=$this->input->post('clientage');
		$data['adults']=$this->input->post('adults');
		$data['clientnote']=$this->input->post('clientnote');
		
		$insertstatus = $this->CaseRegis_model->InsertNewClient($data);
		if ($insertstatus===true){
			$validator['success'] = true;
			$validator['messages'] = "Successfully added";
		}else {
			$validator['success'] = false;
			$validator['messages'] = "Error while inserting the information into the database";
		}
	echo json_encode($validator);
}

function GetClientByCaseAndAdult($caseid){
	$clientbycase = $this->CaseRegis_model->Get_ClientByCaseWithAdult($caseid,true);
	$result = array('data'=>array());
		$x=1;
		$isadult=false;
		foreach ($clientbycase as $key => $value) {
		
		if ($value['adults']=='1'){
			$isadult='false';

		}else{
			$isadult='true';
		}
		
		$adultsval = '<!-- Single button glyphicons glyphicons-sort-by-alphabet -->
				<input type="checkbox" class="minimal" name="adults[]" id='. $value['caseclientid'] .' value='. $value['adults'] .' checked='. $isadult .'>'. $isadult .'</input>
				';
			$result['data'][$key] = array(
					$x,
					//$button,
					//$value['caseclientid'],
					//$value['caseregisid'],
					$value['clientname'],
					$value['clientsex'],
					$value['clientage'],
					$adultsval
				);
				$x++;
		}/// foreach
	
		echo json_encode($result);
}


function GetClientByCaseAndminor($caseid){
	$clientbycase = $this->CaseRegis_model->Get_ClientByCaseWithAdult($caseid,false);
	$result = array('data'=>array());
	$x=1;
	$isminor='false';
	foreach ($clientbycase as $key => $value) {
	
	if ($value['adults']=='1'){
			$isminor='true';
		}else {
			$isminor='false';
		}
		
		$Minorval = '<!-- Single button glyphicons glyphicons-sort-by-alphabet -->
				<input type="checkbox" class="minimal"   value='. $value['adults'] .' checked="'. $isminor .'">'. $isminor .' aa</input>
				';
		$result['data'][$key] = array(
				$x,
				//$button,
				//$value['caseclientid'],
				//$value['caseregisid'],
				$value['clientname'],
				$value['clientsex'],
				$value['clientage'],
				$Minorval
			);
			$x++;
	}/// foreach

	echo json_encode($result);
}

}
?>