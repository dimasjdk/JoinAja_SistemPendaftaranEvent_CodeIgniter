<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Okeoke extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('model_register');
      	$this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
        // if(!$this->session->userdata('logged_in'))
        // {
        //   redirect(site_url('welcome'));
        // }
	}

	public function index()
	{
		$logged_in = $this->session->userdata('logged_in');
		if (!$logged_in){
			return $this->load->view('register');
		}else{
			return $this->load->view('register');
		}
	}

	public function tambah_admin()
	{
		$this->load->view('register');
	}

	public function simpan()
	{
		$data = array(
					'id'			=>$this->input->post('id'),
					'name'			=>$this->input->post('name'),
					'email'			=>$this->input->post('email'),
					'password'		=>md5($this->input->post('password')), //md5
					'remember_token'=>$this->input->post('remember_token'),
					  );

		$this->model_register->insertregister($data);
		redirect('/');
	}



}
