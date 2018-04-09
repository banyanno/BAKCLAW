<?php
class CaseRegis_model extends CI_Model{
    public function __construct()
	{
		$this->load->database();
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
}
?>