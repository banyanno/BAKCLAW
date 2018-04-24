<?php

class CaseRegis_Controller extends CI_Controller{

    private $permission = array();
    public function __construct(){
	parent::__construct();
	$this->load->helper('url'); // Load URL Helper for base_url() 
	$this->load->helper('html'); // Load HTML Helper for img()
	$this->load->model('CaseRegis_model');
	$this->load->model('Lawyers_model');
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
		$data['page_title'] = $this->lang->line('lawyer_menu').' - '.$this->lang->line('lawyer_menu_profiles');
		$data['permission'] = $this->permission;
		
		$totalDashboard['TotalCase']= $this->CaseRegis_model->TotalCase();
		$totalDashboard['TotalPenalties']=$this->CaseRegis_model->TotalPenalties();
		$totalDashboard['TotalCivilParties']=$this->CaseRegis_model->TotalCivilParties();
		$totalDashboard['TotalBusiness']=$this->CaseRegis_model->TotalBusiness();
		$totalDashboard['TotalOther']=$this->CaseRegis_model->TotalOther();

		$totalDashboard['lawyers'] = $this->Lawyers_model->getLawyerAsArray();
		$this->load->view('html/admin/templates/header', $data);
		$this->load->view('html/admin/templates/sidebar');
		$this->load->view('html/admin/templates/menu_footer.php');
		$this->load->view('html/admin/templates/top_navigation.php');
		$this->load->view('html/admin/dashboardlaid.php',$totalDashboard);
		$this->load->view('html/admin/templates/footer');		
		
	}

// ============== Start module Case Registration ====================================
public function insertNewCaseRegis()
{
	$validator = array('success'=>false,'message'=>array());
	
		$data = array();
		$data['caseno'] =$this->input->post('caseno');
		$data['dateregis']=$this->input->post('dateregis');
		$data['typeofcase']=$this->input->post('typeofcase');
		$data['accusations']=$this->input->post('accusations');
		$data['getfrom']=$this->input->post('getfrom');
		$data['casenote']=$this->input->post('casenote');
		
		$insertstatus = $this->CaseRegis_model->insertCaseRegis($data);
		if ($insertstatus===true){
			$validator['success'] = true;
			$validator['messages'] = "Successfully added case register";
		}else {
			$validator['success'] = false;
			$validator['messages'] = "Error while inserting the information into the database";
			
		}
		
	echo json_encode($validator);

}

public function Edit_CaseRegist($caseID){
	
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
		$x=1;
		foreach ($caseRegis as $key => $value) {
	
		$viewdetial = '<!-- Single button glyphicons glyphicons-sort-by-alphabet -->
				<div class="btn-group">
				<button type="button" class="btn btn-success btn-effect-ripple  dropdown-toggle btn-xs btn-round" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">បង្កើត...
				  <span class="caret"></span>
				</button>
				<ul class="dropdown-menu">			  	
				  <li><a href="#" data-toggle="modal" data-target="#removeStudentModal" onclick="ShowClientCase('.$value['caseid'].')">បង្កើតកូនក្តី</a></li>	
				  <li class="divider"></li>			    
				  <li><a href="#" data-toggle="modal" data-target="#removeStudentModal" onclick="ShowCourtRegis('.$value['caseid'].')">ទទួលរឿងក្តីពី តុលាការ</a></li>
				  <li class="divider"></li>
				  <li><a href="#" data-toggle="modal" data-target="#removeStudentModal" onclick="removeStudent('.$value['caseid'].')">ទទួលរឿងក្តីពី កូនក្តី</a></li>	
				  <li class="divider"></li>
				  <li><a href="#" data-toggle="modal" data-target="#removeStudentModal" onclick="removeStudent('.$value['caseid'].')">ទទួលរឿងក្តីពី នគបាល</a></li>    
				  <li class="divider"></li>
				  <li><a href="#" data-toggle="modal" data-target="#removeStudentModal" onclick="removeStudent('.$value['caseid'].')">ទទួលរឿងក្តីពី អាវុធហត្ថ</a></li> 
				  <li class="divider"></li>
				  <li><a href="#" data-toggle="modal" data-target="#removeStudentModal" onclick="removeStudent('.$value['caseid'].')">ទទួលរឿងក្តីពី អាជ្ញាធរស៊ីវិល</a></li>  
				  <li class="divider"></li>
				  <li><a href="#" data-toggle="modal" data-target="#removeStudentModal" onclick="removeStudent('.$value['caseid'].')">ទទួលរឿងក្តីពី</a></li>  
				  <li class="divider"></li>
				  <li><a href="#" data-toggle="modal" data-target="#removeStudentModal" onclick="removeStudent('.$value['caseid'].')">ទទួលរឿងក្តីពី</a></li>  
				</ul>
			  </div>

			  <button class="btn btn-warning btn-xs btn-round"  onclick="FetchClientByCase('. $value['caseid'] .')"><i class="glyphicon glyphicon-hand-down"></i></button>
			​​​​​  <button class="btn btn-danger btn-xs btn-round" onclick="ShowEditeCase('. $value['caseid'] .')" data-toggle="tooltip" data-pacement="botton" data-original-title="កែប្រសំណុំរឿង"><i class="glyphicon glyphicon-edit"></i></button>
				';
			$result['data'][$key] = array(
					$x,
					$value['caseno'],
					$value['dateregis'],
					$value['typeofcase'],
					$value['accusations'],
					$value['getfrom'],
					$value['casenote'],
					$viewdetial
				);
				$x++;
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
	============================	Start Module Cliet that related to case registrator =============================
*/
public function Get_ClientByID($clientid){
	$clientbyID = $this->CaseRegis_model->Get_ClientBy_ID($clientid);
	echo json_encode($clientbyID);
}

function InsertClient(){
		$validator = array('success'=>false,'message'=>array());
		$data = array();
		$data['caseregisid'] =$this->input->post('caseregisid');
		$data['clientname']=$this->input->post('clientname');
		$data['clientsex']=$this->input->post('clientsex');
		$data['clientage']=$this->input->post('clientage');
		$data['adults']=$this->input->post('adults');
		$data['isclient']=$this->input->post('isclient');
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
public function EditeClientByID($clientID){
	//echo $clientid;
	$validator = array('success' => false, 'messages' => array());
	$data = array();
	$data['clientname'] =$this->input->post('clientname');
	$data['clientsex']=$this->input->post('clientsex');
	$data['clientage']=$this->input->post('clientage');
	$data['adults']=$this->input->post('adults');
	$data['isclient']=$this->input->post('isclient');
	$data['clientnote']=$this->input->post('clientnote');
	
	$update = $this->CaseRegis_model->Edit_Client($clientID,$data);
	
	if ($update==1){
		$validator['success'] = true;
		$validator['messages'] = "Successfully update";
	
	}else{
		$validator['success'] = false;
		$validator['messages'] = "Error while inserting the information into the database";
	}
	echo json_encode($validator);
}

public function DeletedClientByID($clientID){
	$validator = array('success' => false, 'messages' => array());
	$data = array();
	$data['isdeleted '] ='1';// set client to delete status.
	$update = $this->CaseRegis_model->Delete_Client($clientID,$data);
	
	if ($update==1){
		$validator['success'] = true;
		$validator['messages'] = "Successfully update";
	
	}else{
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
			$isadult='checked';

		}else{
			$isadult='unchecked';
		}
		
		$adultsval = '<!-- Single button glyphicons glyphicons-sort-by-alphabet -->
				<input disabled type="checkbox" class="minimal" name="adults[]" id='. $value['caseclientid'] .' value='. $value['adults'] .' ' . $isadult .' >
				';
		$actionadult='<button class="btn btn-warning btn-xs btn-round" onclick="ShowCaseToEdite('. $value['caseclientid'] .')"><i class="glyphicon glyphicon-edit"></i></button>
				<button class="btn btn-danger btn-xs btn-round"  onclick="DeleteClient('. $value['caseclientid'] .')"><i class="glyphicon glyphicon-minus"></i></button>
		';
		$result['data'][$key] = array(
					$x,
					$value['clientname'],
					$value['clientsex'],
					$value['clientage'],
					$adultsval,
					$value['clientnote'],
					$actionadult
				);
				$x++;
		}/// foreach
	
		echo json_encode($result);
}


function GetClientByCaseAndminor($caseid){
	$clientbycase = $this->CaseRegis_model->Get_ClientByCaseWithAdult($caseid,false);
	$result = array('data'=>array());
	$x=1;
	$isminor='unchecked';
	foreach ($clientbycase as $key => $value) {
	if($value['adults']=='1'){
			$isminor='checked';
		}else {
			$isminor='unchecked';
		}
		
		$Minorval = '<!-- Single button glyphicons glyphicons-sort-by-alphabet -->
				<input disabled type="checkbox" class="minimal"   value='. $value['adults'] .' ' . $isminor .'>
				';
		$actionminor='<button class="btn btn-warning btn-xs btn-round" onclick="ShowCaseToEdite('. $value['caseclientid'] .')"><i class="glyphicon glyphicon-edit"></i></button>
				<button class="btn btn-danger btn-xs btn-round"  onclick="DeleteClient('. $value['caseclientid'] .')"><i class="glyphicon glyphicon-minus"></i></button>
				';
		$result['data'][$key] = array(
				$x,
				$value['clientname'],
				$value['clientsex'],
				$value['clientage'],
				$Minorval,
				$value['clientnote'],
				$actionminor
			);
			$x++;
	}/// foreach

	echo json_encode($result);
}
// ================================= Start Module Court registration ============================================

public function getLawyerInfo()
{
	$lawyers = $this->Lawyers_model->getLawyerAsArray();
	echo json_encode($lawyers);
}


}
?>