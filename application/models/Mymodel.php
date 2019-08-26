	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

	public function insert($table,$data)
	{
		return $this->db->insert($table,$data);
	}

	///hapus data array
	public function delete($table,$where)
	{
		return $this->db->delete($table,$where);
	}

	///update data

	public function update($table,$data,$where)
	{
		return $this->db->update($table,$data,$where);
	}

	 public function getData($table)
	 {
	 	$data = $this->db->query('select * from '.$table.' order By created_at');
	 	return $data->result_array();
	 }

	 public function getDataWhere($tbl,$where="")
	 {
		$data = $this->db->query('select * from '.$tbl.' '.$where);
		return $data->result_array();
	}
}
