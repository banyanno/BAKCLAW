<?php

class Lawyers_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	
	public function record_count() {
	
        return $this->db->count_all("lawyers");
    }
	
	
	public function get_data_by_id($id)
	{
		 $query = $this->db->query("SELECT * FROM lawyers WHERE id=".$id);
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }
	
	}
	
	public function fetch_data($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("lawyers");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }	

	public function get_data()
	{
		 $query = $this->db->query("SELECT * FROM lawyers");
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }
	
	}
	
	public function get_lawyer_code($id)
	{
		$query = $this->db->query("SELECT lawyer_code FROM lawyers WHERE id=".$id);
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
	}
	public function insert($lawyer)
	{
		$data = array(
		   'lawyer_code ' => $lawyer['lawyer_code'] ,
		   'lawyer_name_en' => $lawyer['lawyer_name_en'] ,
		   'lawyer_name_kh' => $lawyer['lawyer_name_kh'] ,
		   'lawyer_dob' => $lawyer['lawyer_dob'] ,
		   'modidate  ' => $lawyer['modidate'] 
		);
		
		if(!$this->db->insert('lawyers', $data))
		{
			$error["message"] = "Error while inserting data";
			$error["return_id"] = "error";
			error_log(json_encode($error)."\r\n", 3, "trace.log");	
		return $error;
		}
		$success["message"] = "success";	
		$success["return_id"] = $this->db->insert_id();
		return $success; 	
	}
	
	public function remove($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('lawyers'); 
		return 'true';
	}
	
	public function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('lawyers', $data);	
		return $this->db->queries[0];	
	}
		
	public function get_rows_result($queryString)
	{
	     $query = $this->db->query($queryString);
		 if ($query->num_rows() > 0)
		 {
			 return $query->result_array();
		 }
	
	}
	
	

	
	
	
}

?>