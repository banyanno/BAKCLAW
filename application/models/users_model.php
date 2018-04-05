<?php

class Users_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	function login($username, $password)
	{
	   $this->db->select('USER_ID, USER_NAME, USER_PASSWORD');
	   $this->db->from('users');
	   $this->db->where('USER_NAME', $username);
	  // $this->db->where('USER_PASSWORD', md5($password));
	   $this->db->where('USER_PASSWORD', $password);
	   $this->db->limit(1);
	 
	   $query = $this->db->get();
	 
	   if($query->num_rows() == 1)
	   {
	     return $query->result();
	   }
	   else
	   {
	     return false;
	   }
	}

	public function verify_password($id,$passwd)
	{
		 $query = $this->db->query("SELECT USER_ID FROM users WHERE USER_ID=".$id." AND USER_PASSWORD='".$passwd."'");
		
		 if ($query->num_rows() > 0)
		 {
			 return $query->result_array();
		 }
	return array();	 
	}

	public function insert($user)
	{
		$data = array(
		   'USER_NAME' => $user['username'] ,
		   'USER_PASSWORD' => $user['passwd'] ,
		   'USER_FULLNAME' => $user['name'] ,
		   'USER_STAFFID' => $user['staffid'] ,
		 //  '' =>  $user['gender'] , 
		 //  '' =>  $user['desc'] , 
		   'isActive' =>  $user['isActive'] ,  	
		   'DEP_ID' =>  $user['dep_id'] ,
		   'MODIDATE' =>  $user['modidate'] 
		 //  '' =>  $user['modidate'] 		   
		);
		
		if(!$this->db->insert('users', $data))
		{
			$error = $this->db->error();	
		return $error;
		}
	$success["message"] = "User has been inserted!";	
	return $success; 	
		
	}
	
	public function remove($id)
	{
		$this->db->where('USER_ID', $id);
		$this->db->delete('users'); 
	}
	
	public function update($id,$data)
	{	
		$this->db->trans_start();
		$this->db->where('USER_ID', $id);
		$this->db->update('users', $data);
		$this->db->trans_complete();

		if($this->db->affected_rows() >=0){
			$success["message"] = "User has been updated!";
			return $success;
		  }
		$error["message"] = "An error occured while updating user!";
		return $error;
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
		 $query = $this->db->query("SELECT * FROM users");
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }else
		 	{
			 return array(); //return empty array if no record found
		}
	
	}

	public function get_authorised_users()
	{

		$query = $this->db->query("SELECT * FROM users WHERE isActive=1 AND isSuper <> 1");
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}else
			{
			return array(); //return empty array if no record found
		   }

	}
	
	public function get_user_group()
	{
		 $query = $this->db->get("bakc_users");
		 if ($query->num_rows() > 0)
		 {
			 return $query->result();
		 }	
	
	}
	
	
	
}

?>