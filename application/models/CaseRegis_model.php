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
    
    public function fetchAllCassRegis(){
        $sql="SELECT * FROM case_regis";
        $query=$this->db->query($sql);
        return $query->result_array();
    }

}
?>