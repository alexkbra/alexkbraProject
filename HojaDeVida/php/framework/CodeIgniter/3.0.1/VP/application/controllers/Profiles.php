<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Profiles extends CI_Controller
	{

		public function getProfiles()
		{
			$this->load->model('Profilesmd');
			die(json_encode($this->Profilesmd->getProfiles()));
		}
	}
 ?>