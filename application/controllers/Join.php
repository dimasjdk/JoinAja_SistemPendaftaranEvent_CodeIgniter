<?php

defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Join extends CI_Controller {



	function index()

	{

		$this->load->view('join');
	}



	function pemrograman(){

		$this->load->view('admin/index') ;

	}



	function joinaja(){

		$this->load->view('join');

	}





}

