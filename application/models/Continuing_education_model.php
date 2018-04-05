<?php

class Continuing_education_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function insert($edu)
	{
		$data = array(
           'lawyer_id' => $edu['lawyer_id'] ,
           'number_of_hours' => $edu['number_of_hours'] ,
           'date_of_study' => $edu['date_of_study'] ,
           'modidate' => $edu['modidate']	   
		);
		
		if(!$this->db->insert('continuing_education', $data))
		{
			$error["message"] = "Error occurs while inserting data!";
		return $error;
		}
	$success["message"] = "Education has been saved!";	
	return $success; 	
		
	}
	
	public function remove($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('continuing_education'); 
	}
	
	public function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('continuing_education', $data);	
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
		 $query = $this->db->query("SELECT * FROM continuing_education");
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
		 $query = $this->db->query("SELECT * FROM continuing_education WHERE lawyer_id=".$id);
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