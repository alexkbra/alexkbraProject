<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Profilesmd extends CI_Model
	{

		public function getProfiles()
		{
			return $this->db->get('profiles')->result();
			//return array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
		}
	}

 ?>