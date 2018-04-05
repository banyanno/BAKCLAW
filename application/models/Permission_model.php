<?php

class Permission_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
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
		 $query = $this->db->query("SELECT * FROM permission_label WHERE PERMIS_ID <> 1");
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