<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Home extends CI_Controller
{

	public function index($info = 'page')
	{
		//$this->load->model('post');
		
		$listPost = $this->post->getListPost();

		$data = array('title' => 'Home',
			'mensajeInicio' => 'Inicio CI',
			'name' => 'Alexkbra Post',
			'description' => 'Cite web de ufología y misterios',
			'info' => $info,
			'listPost' => $listPost
		);
		
		$this->load->view('/guest/head',$data);
		$this->load->view('/guest/nav',$data);
		$this->load->view('/guest/header',$data);
		$this->load->view('/guest/content',$data);
		$this->load->view('/guest/footer',$data);

	}
}