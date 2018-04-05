<?php

class Discipline_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function insert($compliant)
	{
		$data = array(
		 //  'complaints_code' => $compliant['complaints_code'] ,
           'lawyer_id' => $compliant['lawyer_id'] ,
           'complaints_desc' => $compliant['complaint_desc'] ,
           'is_presidential_reconciliation' => $compliant['end_compliant_by_president'] ,
           'is_inspection' => $compliant['is_inspection'] ,
           'complaints_path' => $compliant['complaints_path'] ,
           'cd_id' => $compliant['cd_id'] ,
           'modidate' => $compliant['modidate']	   
		);
		
		if(!$this->db->insert('discipline', $data))
		{
			$error["message"] = "Error occurs while inserting data!";
		return $error;
		}
	$success["message"] = "Complaint has been saved!";	
	return $success; 	
		
	}
	
	public function remove($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('discipline'); 
	}
	
	public function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('discipline', $data);	
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
		 $query = $this->db->query("SELECT * FROM discipline");
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
		 $query = $this->db->query("SELECT * FROM discipline WHERE lawyer_id=".$id);
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