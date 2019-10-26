<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sampah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		$this->load->model('sampah_model');
	}

	public function index()
	{
		$kategori = ucwords($this->input->get('kategori'));
		if (empty($kategori)) {
			redirect(base_url());
		}
		$table = '';
		$prediksi_harga = $this->sampah_model->get_prediksi_harga($table);
		$harga = $this->sampah_model->get_harga($table);


		$prediksi_harga = $this->build_prediksi_harga($harga,$prediksi_harga);
		$harga = $this->build_harga($harga);
		$tanggal = $this->build_tanggal(
				$this->sampah_model->get_tanggal($table),
				$this->sampah_model->get_prediksi_tanggal($table)
		);
		$data = array(
				'title' => 'Detil Harga Sampah '.$kategori, 
				'harga' => $harga,
				'prediksi_harga' => $prediksi_harga,
				'tanggal' => $tanggal,
		);
		$this->layout->view('detail_sampah',$data);


	}
	private function build_harga($harga)
	{
		$data = [];
		$len = count($harga);
		// var_dump($harga);
		// die;
		$i = 0;
		foreach ($harga as $key) {
			$data[$i++] = $key['harga'];
		}
		return $data;
	}
	private function build_prediksi_harga($harga,$prediksi_harga)
	{
		$data = [];
		$len_harga = count($harga);
		$len = count($prediksi_harga);
		$i = 0;
		for ($j=0; $j < $len_harga-1; $j++) {
			$data[$i++] = null;
		}

		$data[$i++] = $harga[$len_harga-1]['harga'];
		foreach ($prediksi_harga as $key) {
			$data[$i++] = $key['harga'];
		}
		return $data;
	}
	private function build_tanggal($tanggal,$prediksi_tanggal)
	{
		$data = [];
		$i = 0;
		foreach ($tanggal as $key) {
			$data[$i++] = $key['tanggal'];
		}
		foreach ($prediksi_tanggal as $key) {
			$data[$i++] = $key['tanggal'];
		}
		return $data;
	}
}

