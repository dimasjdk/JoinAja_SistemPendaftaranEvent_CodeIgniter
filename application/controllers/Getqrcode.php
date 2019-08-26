<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Getqrcode extends CI_Controller {



	function getQR($pin)

	{

		//$pin=12345;



		$this->load->library('ciqrcode');



		header("Content-Type: image/png");

		$params['data'] = 'http://localhost/fiktacia/admin/absen/'.$pin;

		$params['level'] = 'H';

		$params['size'] = 10;

		$this->ciqrcode->generate($params);

	}



}

