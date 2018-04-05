<?php

class Departments_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	
	public function record_count() {
	
        return $this->db->count_all("department");
    }
	
	
	public function get_department_by_id($id)
	{
		 $query = $this->db->query("SELECT * FROM department WHERE id=".$id);
		 if ($query->num_rows() > 0)
		 {
			 return $query->result_array();
		 }
	
	}
	
	public function fetch_data($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("department");
 
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
		 $query = $this->db->query("SELECT * FROM department");
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }
	
	}
	
	public function insert($department)
	{
		$data = array(
		   'DEP_ID ' => $department['dept_id'] ,
		   'DEP_NAME' => $department['dept_name'] ,
		   'DEP_DESC ' => $department['dept_desc']	   
		);
		
		$this->db->insert('department', $data);
	//	var_dump( $this->db ); 
	//	return $this->db->queries[0];
		return 'true';
	}
	
	public function remove($id)
	{
		$this->db->where('DEP_ID', $id);
		$this->db->delete('department'); 
		return 'true';
	}
	
	public function update($id,$data)
	{
		$this->db->where('DEP_ID', $id);
		$this->db->update('department', $data);	
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