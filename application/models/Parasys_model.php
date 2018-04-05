<?php

class  Parasys_model extends CI_Model {


    public function __construct()
	{
		$this->load->database();
    }
    
    // Insert para system
    //============= Start Client ========================================
    public function insertClient($clients)
	{
	
		//$insert_data = array(
		//	'class_name' => $this->input->post('className'),
		//	'numeric_name' => $this->input->post('numericName')
		//);
		$status=$this->db->insert('clients', $clients);
		return ($status === true ? true : false);
		
		
		
		//return $this->db->insert_id();
		
	}

	public function client_update($clientID)
	{
		$data = array();
		//$data['CLIENT_ID']=$this->input->post('clientid');
		$data['CLIENT_NAME'] =$this->input->post('clientname');
		$data['CLIENT_SEX']=$this->input->post('clientsex');
		$data['CLIENT_AGE']=$this->input->post('clientage');
		$data['CLIENT_TEL']=$this->input->post('clienttel');
		$data['CLIENT_ADD']=$this->input->post('clientaddress');
		$data['CLIENT_NAT_ID']=$this->input->post('clientidcard');
		//$data['message'] = "posted successfully!";	
		$this->db->where('CLIENT_ID',$clientID);
		$status= $this->db->update('clients', $data);
		//echo $status;
		return ($status === true ? true: false);		
	}
	public function get_all_client(){

		$sql = "SELECT * FROM clients";
			$query = $this->db->query($sql);
			return $query->result_array();
	/*	$this->db->from('clients');
		$query=$this->db->get();
		return $query->result();*/
	}

	public function  get_by_id($id){
		$this->db->from('clients');
		$this->db->where('CLIENT_ID',$id);
		$query = $this->db->get();
		return $query->row();
	}
	/*
	* ទាញយកទិន្នន័យសមាប់ធ្វើ parameter នៅក្នុងកាបង្កើតសំនុះរើង
	*/
	public function fetchCasePara(){
		$sql ="SELECT * FROM case_para";
		$query=$this->db->query($sql);
		return $query->result();
	}

	public function fetchCourt(){
		$sql ="SELECT * FROM court";
		$query1=$this->db->query($sql);
		return $query1->result();
	}

	public function fetchIssue(){
		$sql ="SELECT * FROM issue_para";
		$query1=$this->db->query($sql);
		return $query1->result();
	}

/*	public function client_update($where, $data)
	{
		$this->db->update('clients', $data, $where);
		return $this->db->affected_rows();
	}
*/

} 


?>