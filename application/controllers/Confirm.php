<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Confirm extends CI_Controller {

	function index()
	{
		$this->load->view('confirm');
	}

	public function store(){
		$this->load->model('mymodel');
		$email = $this->input->post('email');
		$where = "where email = '".$email."'";
		// $data3 = $this->mymodel->getDataWhere('lunas',$where);
		// $cek=count($data3);
		// if($cek>0){
		// 	redirect('Confirm/Transfer');
		// }
		// else{}
		$data = $this->mymodel->getDataWhere('lunas',$where);
		$count=count($data);
		if($count>0){
			$data = array(
					'pin'=> $data[0]['pin'],
					'name'=> $data[0]['name'],
					'email'=> $data[0]['email'],
					'kategori'=> $data[0]['kategori'],
					'jenis_acara'=> $data[0]['jenis_acara'],
					'created_at'=> date('Y-m-d H:i:s')
				);
				$pin=$data['pin'];
				$data2 = $this->mymodel->getDataWhere('konfirmasis',$where);
				$count=count($data2);
			if($count>0){
				redirect("Getqrcode/getQR/".$pin);
			}
			else{
				$this->mymodel->insert('konfirmasis',$data);
				redirect("Getqrcode/getQR/".$pin);
			}
		}
		else{
			redirect('Confirm/Transfer');
		}
		//redirect("Getqrcode/getQR/".$pin);

}
	public function Transfer(){
		$this->load->view('Transfer');
	}

}
