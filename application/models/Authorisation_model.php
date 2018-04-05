<?php

class Authorisation_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function insert($auth)
	{
		$data = array(
		   'USER_ID' => $auth['USER_ID'] ,
           'PERMIS_ID' => $auth['PERMIS_ID'] ,
           'MODIDATE' => $auth['MODIDATE']	   
		);
		
		if(!$this->db->insert('authorisation', $data))
		{
			//$error = $this->db->error();	
			$error["message"] = "Error occurs while inserting data!";
		return $error;
		}
	$success["message"] = "User has been authorised!";	
	return $success; 	
		
	}
	
	public function remove($id)
	{
		$this->db->where('ID', $id);
		$this->db->delete('authorisation'); 
	}
	
	public function update($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('authorisation', $data);	
	}
		
	public function get_rows_result($queryString)
	{
	     $query = $this->db->query($queryString);
		 if ($query->num_rows() > 0)
		 {
			 return $query->result_array();
		 }
	
	}
	
	public function get_permIDs_by_user($id)
	{
		$query = $this->db->query("SELECT a.USER_ID,p.PERMIS_LABEL FROM authorisation a, permission_label p 
		WHERE a.PERMIS_ID=p.PERMIS_ID AND a.USER_ID=".$id);
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}else
			{
			return array(); //return empty array if no record found
		   }

	}

	public function get_data()
	{
		 $query = $this->db->query("SELECT a.USER_ID,u.USER_NAME,p.PERMIS_LABEL,a.MODIDATE FROM users u,authorisation a, permission_label p 
         WHERE u.USER_ID=a.USER_ID AND a.PERMIS_ID=p.PERMIS_ID AND u.isSuper <> 1");
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }else
		 	{
			 return array(); //return empty array if no record found
			}
	
	}


	public function is_super($permission_array)
	{
		foreach($permission_array as $p){
            if($p->PERMIS_LABEL == "Super")
                return TRUE;
        }

        return FALSE;
    }
    
    public function is_inspect($permission_array)
	{
		foreach($permission_array as $p){
            if($p->PERMIS_LABEL == "Inspect")
                return TRUE;
        }

        return FALSE;
	}

    public function is_admin($permission_array)
	{
		foreach($permission_array as $p){
            if($p->PERMIS_LABEL == "Adminstrate")
                return TRUE;
        }

        return FALSE;
	}

	  public function is_legal($permission_array)
	{
		foreach($permission_array as $p){
            if($p->PERMIS_LABEL == "Legal AID")
                return TRUE;
        }

        return FALSE;
	}
}

?>