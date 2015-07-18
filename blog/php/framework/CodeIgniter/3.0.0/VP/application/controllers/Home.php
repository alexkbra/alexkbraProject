<?php

/**
* 
*/
class Home extends CI_Controller
{
	/*Funcion que se inicia cuando se llama al controlador*/
	public function index($info = '')
	{
		$data = array('title' => 'Home' , 'mensaje' => 'Hola mundo php' , 'info' => $info);
		$this->load->view("home",$data);
	}
}