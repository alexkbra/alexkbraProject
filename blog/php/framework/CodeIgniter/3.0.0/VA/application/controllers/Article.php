<?php

/**
* 
*/
class Article extends CI_Controller
{
	
	public function post($url='')
	{
		//$this->load->model('post');
		$post = $this->post->getPostByUrl($url);

		$data = array('title' => $post->titulo,
			'name' => 'Alexkbra Post',
			'post' => $post,
			);
		
		$this->load->view('/guest/head',$data);
		$this->load->view('/guest/nav',$data);
		$this->load->view('/post/header',$data);
		$this->load->view('/post/article',$data);
		$this->load->view('/guest/footer',$data);

	}

	public function loadNew($id='')
	{
		$this->load->model('user');
		$user = $this->user->getUserById($id);

		$data = array('title' => $user->nombre,
			'name' => 'Alexkbra Post',
			'description' => 'Bienvenido '.$user->nombre,
			'info' => $user->email,
			'user' => $user
		);
		
		$this->load->helper('bootstrap');

		$this->load->view('/guest/head',$data);
		$this->load->view('/guest/nav',$data);
		$this->load->view('/guest/header',$data);
		$this->load->view('/post/new',$data);
		$this->load->view('/guest/footer',$data);
	}
}

