<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Admin extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->model('mymodel');
	}

	function index()
	{
		$logged_in = $this->session->userdata('logged_in');

			if (!$logged_in)
			{
				redirect(site_url('welcome'));

			}
			else{
		$data['peserta'] = $this->mymodel->getData('pesertas');
		$this->template->load('admin/index','admin/peserta',$data);
		}
	}

	public function peserta()
	{
		$logged_in = $this->session->userdata('logged_in');

			if (!$logged_in)
			{
				redirect(site_url('welcome'));

			}
			else{
		$data['peserta'] = $this->mymodel->getData('pesertas');
		$this->template->load('admin/index','admin/peserta',$data);
		}
	}

	public function lunas()
	{
		$logged_in = $this->session->userdata('logged_in');

			if (!$logged_in)
			{
				redirect(site_url('welcome'));

			}
			else{
		$data['lunas'] = $this->mymodel->getData('lunas');
		$this->template->load('admin/index','admin/lunas',$data);
		}
	}

	public function confirm()
	{
		$logged_in = $this->session->userdata('logged_in');

			if (!$logged_in)
			{
				redirect(site_url('welcome'));

			}
			else{
		$data['konfirm'] = $this->mymodel->getData('konfirmasis');
		$this->template->load('admin/index','admin/konfirmasi',$data);
		}
	}

	public function hadir()
	{
		$logged_in = $this->session->userdata('logged_in');

			if (!$logged_in)
			{
				redirect(site_url('welcome'));

			}
			else{
		$data['hadir'] = $this->mymodel->getData('hadirs');
		$this->template->load('admin/index','admin/hadir',$data);
		}

	}

	public function getLunas($pin){
		$where = "where pin = '".$pin."'";
		$data = $this->mymodel->getDataWhere('pesertas',$where);
		$data = array(
			'pin'=> $data[0]['pin'],
			'name'=> $data[0]['name'],
			'email'=> $data[0]['email'],
			'telp'=> $data[0]['telp'],
			'nim'=> $data[0]['nim'],
			'progdi'=> $data[0]['progdi'],
			'alamat'=> $data[0]['alamat'],
			'kategori'=> $data[0]['kategori'],
			'jenis_acara'=> $data[0]['jenis_acara'],
			'created_at'=> date('Y-m-d H:i:s')
		);

		$this->mymodel->insert('lunas',$data);
		$where2=array('pin'=>$pin);
		$this->mymodel->delete('pesertas',$where2);

		redirect('admin/peserta','refresh');
	}

	public function deletePeserta($pin){
		$where=array('pin'=>$pin);
		$this->mymodel->delete('pesertas',$where);

		redirect('admin/peserta','refresh');
	}

	public function belumLunas($pin){
		$where = "where pin = '".$pin."'";
		$data = $this->mymodel->getDataWhere('lunas',$where);
		$data = array(
			'pin'=> $data[0]['pin'],
			'name'=> $data[0]['name'],
			'email'=> $data[0]['email'],
			'telp'=> $data[0]['telp'],
			'nim'=> $data[0]['nim'],
			'progdi'=> $data[0]['progdi'],
			'alamat'=> $data[0]['alamat'],
			'kategori'=> $data[0]['kategori'],
			'jenis_acara'=> $data[0]['jenis_acara'],
			'created_at'=> $data[0]['created_at']
		);

		$this->mymodel->insert('pesertas',$data);
		$where2=array('pin'=>$pin);
		$this->mymodel->delete('lunas',$where2);
		redirect('admin/lunas','refresh');
	}

	public function deleteKonfirmasi($pin){
		$where=array('pin'=>$pin);
		$this->mymodel->delete('konfirmasis',$where);

		redirect('admin/confirm','refresh');
	}

	public function absen($pin){
	$logged_in = $this->session->userdata('logged_in');

			if (!$logged_in)
			{
				redirect(site_url('welcome'));

			}
			else{
		$this->load->model('mymodel');
		$where = "where pin = '".$pin."'";
		$data = $this->mymodel->getDataWhere('konfirmasis',$where);
		
		if(empty($data)){
			return $this->load->view('cekabsenfailed');
		}else{
			$data = array(
				'pin'=> $data[0]['pin'],
				'name'=> $data[0]['name'],
				'email'=> $data[0]['email'],
				'kategori'=> $data[0]['kategori'],
				'jenis_acara'=> $data[0]['jenis_acara'],
				'created_at'=> date('Y-m-d H:i:s')
			);
			// $pin=$data['pin'];
			$data2 = $this->mymodel->getDataWhere('hadirs',$where);
			$count=count($data2);
			if($count>0){
				$this->load->view('cekabsensuccess', $data);
			}
			else {
				$this->load->view('cekabsensuccess', $data);
				$this->mymodel->insert('hadirs',$data);
				
			}
		}

	}
}
	public function deleteAbsen($pin){
		$where=array('pin'=>$pin);
		$this->mymodel->delete('hadirs',$where);

		redirect('admin/hadir','refresh');
	}
	
	public function edit($pin){
		$where = "where pin = '".$pin."'";
		$data['peserta'] = $this->mymodel->getDataWhere('pesertas',$where);
		$this->template->load('admin/index','admin/edit',$data);
	}

	public function updatePeserta(){
		$this->load->model('mymodel');
		$kat = $this->input->post('kategori');
			if($kat == 'mhs' )
				{
					$kategori= 'mahasiswa';
				}
			else
			{
				$kategori= 'umum';
			}
			$data = array(
				'pin'=> $this->input->post('pin'),
				'name'=> $this->input->post('name'),
				'email'=> $this->input->post('email'),
				'telp'=> $this->input->post('telp'),
				'nim'=> $this->input->post('nim'),
				'progdi'=> $this->input->post('progdi'),
				'alamat'=> $this->input->post('alamat'),
				'kategori'=> $kategori,
				'updated_at'=> date('Y-m-d H:i:s')
			);
			$pin=$this->input->post('pin');
			$where=array('pin'=>$pin);
			$this->mymodel->update('pesertas',$data,$where);

			redirect('Admin/peserta');
	}
}
