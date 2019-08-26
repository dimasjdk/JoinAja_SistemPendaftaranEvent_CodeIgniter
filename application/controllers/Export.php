<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Export extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_export');
		$this->load->helper('url');
	}
	public function export_excelpeserta()
	 {
					$data = array('data_peserta' => $this->model_export->select_peserta()->result());

					$this->load->view('laporan/excel_peserta',$data);
		 }

			public function export_excellunas()
	 {
					$data = array('data_lunas' => $this->model_export->select_lunas()->result());

					$this->load->view('laporan/excel_lunas',$data);
		 }

		 public function export_excelkonfirmasi()
	 {
					$data = array('data_konfirmasi' => $this->model_export->select_konfirmasi()->result());

					$this->load->view('laporan/excel_konfirmasi',$data);
		 }

		 public function export_excelhadir()
	 {
					$data = array('data_hadir' => $this->model_export->select_hadir()->result());

					$this->load->view('laporan/excel_hadir',$data);
		 }

}
