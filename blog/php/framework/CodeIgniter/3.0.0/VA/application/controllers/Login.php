<?php 

/**
* 
*/
class Login extends CI_Controller
{
	
	public function index()
	{

		$this->load->model('user');

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->user->getUser($email);

		if ($user != null) {

			if ($user->password == $password) {
				$data = array(
					'email' => $user->email,
					'id'=> $user->id,
					'login' => true
				);
				$this->session->set_userdata($data);
				//echo $this->session->userdata('login');
				header("Location: ". base_url());
			}else{
				header("Location: ". base_url());
			}
		}else{
			header("Location: ". base_url());
		}
	}
	public function logOut()
	{
		$this->session->sess_destroy();
		header("Location: ". base_url());
	}
	public function showUser()
	{
		echo $this->session->userdata('login');
	}
}