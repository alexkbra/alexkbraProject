<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Home extends CI_Controller{

	public function index($info = 'page')
	{
		$data = array('title' => 'Home',
			'mensajeInicio' => 'Inicio CI',
			'info' => $info);
		$this->load->view('home',$data); 
	}

}