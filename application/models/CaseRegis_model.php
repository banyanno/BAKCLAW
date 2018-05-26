<?php
class CaseRegis_model extends CI_Model{
    public function __construct()
	{
		$this->load->helper('url');
		$this->load->database();
		$this->load->helper('form');
		$this->load->library('upload');
    }

	// ======================== Count Total Dashboard ===============================

	public function TotalCase()
	{
		$sql ="SELECT * FROM case_regis";
		$query=$this->db->query($sql);
		return $query->num_rows();
	}
	// ============== សរុប ព្រហ្មទណ្ឌ =======================
	public function TotalPenalties(){
		$sql = "SELECT * FROM case_regis WHERE typeofcase='ព្រហ្មទណ្ឌ'";
		$query=$this->db->query($sql);
		return $query->num_rows();
	}

	// ============== រដ្ឋប្បវេណី ==========
	public function TotalCivilParties()
	{
		$sql = "SELECT * FROM case_regis WHERE typeofcase='រដ្ឋប្បវេណី'";
		$query=$this->db->query($sql);
		return $query->num_rows();
	}
	// ============= ពាណិជ្ជកម្ម ==========
	public function TotalBusiness()
	{
		$sql = "SELECT * FROM case_regis WHERE typeofcase='ពាណិជ្ជកម្ម'";
		$query=$this->db->query($sql);
		return $query->num_rows();
	}
	// ============ ផ្សេងៗ =======
	public function TotalOther()
	{
		$sql = "SELECT * FROM case_regis WHERE typeofcase='ផ្សេងៗ'";
		$query=$this->db->query($sql);
		return $query->num_rows();
	}
	

       // Insert para system
	//============= Start Case Registration ============================
	
    public function insertCaseRegis($caseregis)
	{
		$status=$this->db->insert('case_regis', $caseregis);
        return ($status === true ? true : false);
    }

    public function Edit_CaseRegist($caseID,$dataUpdate)
	{
		
		//$data['message'] = "posted successfully!";	
		$this->db->where('caseid',$caseID);
		$status= $this->db->update('case_regis', $dataUpdate);
		//echo $status;
		return ($status === true ? true: false);		
	}
    
    public function fetchAllCassRegis(){
        $sql="SELECT * FROM case_regis";
        $query=$this->db->query($sql);
        return $query->result_array();
    }

    public function  Get_CaseBy_ID($caseid){
		$this->db->from('case_regis');
		$this->db->where('caseid',$caseid);
		$query = $this->db->get();
		return $query->row();
	}
	//============= End Case Registration ============================

	//============= Start create module client adult or minor ========
	public function InsertNewClient($client){
		$status = $this->db->insert('case_client',$client);
		return ($status===true ? true : false);
	}

	public function Edit_Client($clientID,$client){
		$this->db->where('caseclientid',$clientID);
		$status=$this->db->update('case_client',$client);
		return ($status === true ? true : false);
	}

	public function Delete_Client($clientID,$client){
		$this->db->where('caseclientid',$clientID);
		$status=$this->db->update('case_client',$client);
		return ($status === true ? true : false);
	}


	public function Get_ClientBy_ID($clientid){
		
		$this->db->from('case_client');
		$this->db->where('caseclientid',$clientid);
		$query=$this->db->get();
		return $query->row();
	}

	public function Get_ClientByCaseWithAdult($caseid,$isclient){
		$para=array(
			'caseregisid'=>$caseid,
			'isclient'=>$isclient,
			'isdeleted'=>'0'
		);
		$this->db->from('case_client');
		$this->db->where($para);
		$query= $this->db->get();
		return $query->result_array();
	}

	//============= End create module client adult or minor ==========

	//============= Start create module case receive from court =======
	/*

	*/
	public function CreateCaseByCourt(){
		$courtinfo = array(
    		'caseregisid' => $this->input->post('caseregisid'),
    		'courtname' => $this->input->post('courtname'),
    		'letter_req_no' => $this->input->post('letter_req_no'),
    		'letter_req_date' => $this->input->post('letter_req_date'),
    		'is_poor' => $this->input->post('is_poor') ,//strtotime(date('Y-m-d h:i:s a')),
    		'interview_date' => $this->input->post('interview_date'),
    		'interview_note' => $this->input->post('interview_note'),
    		'isaprove' => $this->input->post('isaprove'),
    		'aprove_money_no' => $this->input->post('aprove_money_no'),
    		'aprove_money_date' => $this->input->post('aprove_money_date') ,
    		'aprove_by_who' => $this->input->post('aprove_by_who'),
    		'aprove_money_total' => $this->input->post('aprove_money_total'),
			'aporve_ispaid' => $this->input->post('aporve_ispaid'),
			'appove_mission_no' => $this->input->post('appove_mission_no'),
			'aprove_mission_date' => $this->input->post('aprove_mission_date'),
			'case_request_note' => $this->input-> post('case_request_note')
		);
		$status = $this->db->insert('case_court', $courtinfo);
		$court_regisid = $this->db->insert_id();
		$count_lawyer = count($this->input->post('lawyer_name')); // get list of lawyer and loop to insert.
		for($i = 0; $i < $count_lawyer; $i++){
			$lawyer=array(
				'case_court_id' => $court_regisid,
				'lawyer_name'=> $this->input->post('lawyer_name')[$i],
				'aprove_appointed_no' => $this->input->post('aprove_appointed_no')[$i],
				'aprove_appointed_date'=> $this->input->post('aprove_appointed_date')[$i]
			);
			$this->db->insert('case_court_appointedlawyer', $lawyer);
		}
		

		/*$countFile = count($_FILES['files_browse']['name']);
		$filess=$_FILES;
	
		for ($j=0;$j<$countFile;$j++){
			 if(!empty($_FILES['files_browse']['name'][$j])){
				  // Define new $_FILES array - $_FILES['file']
          		$_FILES['files_browse']['name'] = $filess['files_browse']['name'][$j];
				$_FILES['files_browse']['type'] = $filess['files_browse']['type'][$j];
          		$_FILES['files_browse']['tmp_name'] = $filess['files_browse']['tmp_name'][$j];
          		$_FILES['files_browse']['error'] = $filess['files_browse']['error'][$j];
          		$_FILES['files_browse']['size'] = $filess['files_browse']['size'][$j];
				 
				 
				$config['upload_path']="./assets/images"; 
				$config['allowed_types']='gif|jpg|png';
				$config['overwrite']=TRUE;
				$config['remove_spaces']=TRUE;
				 $config['encrypt_name'] = TRUE;
				$config['file_name'] = $_FILES['files_browse']['name'][$j];
				
				
				 
				 // Load upload library:
				$this->upload->initialize($config);
				// $this->load->library('upload',$config);
				    // File upload
				  if($this->upload->do_upload('files_browse')){
					// Get data about the file
					
					$result['success'] = $this->upload->data();
					
					//echo json_encode($result);
					//$filename = $uploadData['file_name'];

					// Initialize array
					//$data['filenames'][] = $filename;
				  }*/
			 //$this->db->insert('case_filestore',$fileDoc);
	return ($status === true ? true : false);
	}
	
	//============= End create module case receive from court =======
}
?>