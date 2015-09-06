<?php 

/**
* 
*/
class User extends CI_Model
{
	public function getUser($email='')
	{
		$result = $this->db->query("SELECT * FROM user WHERE email = '".$email."' LIMIT 1");
		if ($result->num_rows() > 0) {
			return $result->row();
		}
		return null;
	}

	public function getUserById($id='')
	{
		$result = $this->db->query("SELECT * FROM user WHERE id = '".$id."' LIMIT 1");
		if ($result->num_rows() > 0) {
			return $result->row();
		}
		return null;
	}
}