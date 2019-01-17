<?php defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('users_model');
	// }

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function login()
	{
		$this->load->model('users_model');

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$check = $this->users_model->checkUser($email,$password);

		if($check->num_rows() > 0){
			echo 'anda berhasil login';
		}else{
			echo 'anda gagal login';
		}
		
	}
}

?>
