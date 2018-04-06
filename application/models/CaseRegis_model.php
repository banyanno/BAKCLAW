<?php
class CaseRegis_model extends CI_Model{
    public function __construct()
	{
		$this->load->database();
    }

       // Insert para system
    //============= Start Client ========================================
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

}
?>