<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model {

	function __construct()
		{
			parent::__construct();
		}

	function check_user_account($email, $password)
		{
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('email', $email);
			$this->db->where('password', $password);
			return $this->db->get();
		}

}
