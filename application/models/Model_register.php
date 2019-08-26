<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register extends CI_model {

	function __construct()
		{
			parent::__construct();
		}

	function insertregister($data)
		{
			$this->db->insert('users',$data);
		}

}
