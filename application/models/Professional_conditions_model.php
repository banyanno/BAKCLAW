<?php

class Professional_conditions_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function insert($pc)
	{
		$data = array(
           'lawyer_id' => $pc['lawyer_id'] ,
           'date_of_completion' => $pc['date_of_completion'] ,
           'date_of_prob' => $pc['date_of_prob'] ,
           'is_pursue_study' => $pc['is_pursue_study'] ,
		   'date_of_fulltime' => $pc['date_of_fulltime'] ,
		   //
           'date_of_righteousness' => $pc['date_of_righteousness'] ,
           'date_of_without_righteousness' => $pc['date_of_without_righteousness'] ,
           'date_of_prob_righteousness' => $pc['date_of_prob_righteousness'] ,
           'no_prob_righteousness' => $pc['no_prob_righteousness'] ,
		   'fulltime_approval' => $pc['fulltime_approval'] ,   
		   //
		   'firm_name' => $pc['firm_name'] ,
		   'authorisation_number' => $pc['authorisation_number'] ,
		   'permission_number' => $pc['permission_number'] ,
		   'firm_validity' => $pc['firm_validity'] ,
		   //
		   'out_bar_validity' => $pc['out_bar_validity'] ,
		   'out_bar_decision' => $pc['out_bar_decision'] ,
		   
		   'prohibition_statement' => $pc['prohibition_statement'] ,
           'modidate' => $pc['modidate']	   
		);
		
		if(!$this->db->insert('professional_conditions', $data))
		{
			$error["message"] = "Error occurs while inserting data!";
		return $error;
		}
	$success["message"] = "PC has been saved!";	
	return $success; 	
		
	}
	
	public function remove($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('professional_conditions'); 
	}
	
	public function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('professional_conditions', $data);	
	}
		
	public function get_rows_result($queryString)
	{
	     $query = $this->db->query($queryString);
		 if ($query->num_rows() > 0)
		 {
			 return $query->result_array();
		 }
	
	}

	public function get_data()
	{
		 $query = $this->db->query("SELECT * FROM professional_conditions");
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }else
		 	{
			 return array(); //return empty array if no record found
			}	
	}

	public function get_data_by_id($id)
	{
		 $query = $this->db->query("SELECT * FROM professional_conditions WHERE lawyer_id=".$id);
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }else
		 	{
			 return array(); //return empty array if no record found
			}	
	}


}

?>