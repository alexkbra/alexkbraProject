<?php 

/**
* 
*/
class Profile extends CI_Controller
{
	
	public function index($id='')
	{
		$this->load->model('user');
		$user = $this->user->getUserById($id);

		$data = array('title' => $user->nombre,
			'name' => 'Alexkbra Post',
			'description' => 'Bienvenido '.$user->nombre,
			'info' => $user->email,
			'user' => $user
		);
		
		$this->load->view('/guest/head',$data);
		$this->load->view('/guest/nav',$data);
		$this->load->view('/guest/header',$data);
		$this->load->view('/profile/content',$data);
		$this->load->view('/guest/footer',$data);
	}
}