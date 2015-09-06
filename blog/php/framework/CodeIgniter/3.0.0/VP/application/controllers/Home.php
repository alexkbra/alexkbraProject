<?php

/**
* 
*/
class Home extends CI_Controller
{
	/*Funcion que se inicia cuando se llama al controlador*/
	public function index()
	{
		$data = array('title' => 'Home' , 'mensaje' => 'Bienvenido a mi mundo');
		$this->load->view("home",$data);
	}
}