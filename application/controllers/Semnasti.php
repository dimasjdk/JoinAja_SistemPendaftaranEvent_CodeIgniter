<?php

defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Semnasti extends CI_Controller {



	function index()

	{

		$this->load->view('semnas');
	}



	function pemrograman(){

		$this->load->view('admin/index') ;

	}



	function semnas(){

		$this->load->view('semnas');

	}





}

