<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->load->model('model_login');
			$this->load->helper('url');
		}

		public function login()
		{
			$email 			= $this->input->post('email');
			$password 		= md5($this->input->post('password'));
			//$password 		= $this->input->post('password');
			$temp_account 	= $this->model_login->check_user_account($email, $password)->row();

			$num_account = count($temp_account);

			if ($num_account > 0)
				{
					$array_items = array(
						'id' 				=> $temp_account->id,
						'name' 				=> $temp_account->name,
						'email'				=> $temp_account->email,
						'password'			=> $temp_account->password,
						'remember_token'	=> $temp_account->remember_token,
						'created_at'		=> $temp_account->created_at,
						'update_at'			=> $temp_account->update_at,

						'logged_in' => true
					);

					$this->session->set_userdata($array_items);
					redirect(site_url('admin/peserta'));

				}else
				{
					redirect(site_url('welcome'));
				}

		}
		// keluar dari sistem
		public function logout()
		{
			$this->session->sess_destroy();
			redirect(site_url('/'));
		}




	// public function index(){
	// 	// if ($this->session->userdata('islogin')==true) {
	// 	// 	redirect('admin');
	// 	// }
	// 	// else{

	// 	 		$this->load->view('auth/login');
	// }

	// public function do_login()
	// {
	// 	$password = $this->input->post('password');
	// 		if(isset($password))
	// 		{
	// 			$this->load->view('admin/index');
	// 		}
	// 		else
	// 		{
	// 			redirect(base_url('login'));
	// 		}
	// }

	// public function do_login(){
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	$cek = $this->m_login->cek_user($username,$password);
	// 		if(count($cek)==1){
	// 			$this->session->set_userdata(array(
	// 						'islogin'=>true, //set data telah login
	// 						'username' => $username, //set session username
	// 				));
	// 			redirect('admin');
	// 		}
	// 		else{
	// 			$this->session->set_flashdata('gagallogin','Maaf, Username / Password Salah . Mohon cek kembali');
	// 			$this->load->view('login');
	// 		}
	// }
}
