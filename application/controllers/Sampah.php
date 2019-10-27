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
		$kategori = ucwords($this->input->get('j'));
		if (empty($kategori)) {
			redirect(base_url());
		}
		$table = $kategori;
		$prediksi_harga = $this->sampah_model->get_prediksi_harga($table);
		$harga = $this->sampah_model->get_harga($table);
		$len = count($harga);

		$prev_harga = $harga[$len-2]['harga'];
		$curr_harga = $harga[$len-1]['harga'];
		$rate = (($curr_harga-$prev_harga)*100/$prev_harga);

		$prediksi_harga = $this->build_prediksi_harga($harga,$prediksi_harga);
		$harga = $this->build_harga($harga);
		$tanggal = $this->build_tanggal(
				$this->sampah_model->get_tanggal($table),
				$this->sampah_model->get_prediksi_tanggal($table)
		);
		$status = array(
				'curr_harga' => $curr_harga,
				'rate' => $rate,
				'tren' => (($rate > 0)? 2 : (($rate == 0)? 1 : 0)),
		);

		$detail_predict = $this->sampah_model->get_detail_predict($table);
		$detail_tinggi_rendah = $this->sampah_model->get_harga_tinggi_rendah($table);


		// var_dump($this->sampah_model->get_tanggal($table));
		// die;
		$data = array(
				'title' => 'Sampah '.$kategori, 
				'harga' => $harga,
				'prediksi_harga' => $prediksi_harga,
				'tanggal' => $tanggal,
				'status' => $status,
				'mse' => $detail_predict['mse'],
				'mae' => $detail_predict['mae'],
				'r2' => $detail_predict['r2'],
				'harga_tertinggi' => $detail_tinggi_rendah['harga_tertinggi'],
				'harga_terendah' => $detail_tinggi_rendah['harga_terendah'],


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
		// var_dump($harga);
		// die;
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
			$data[$i++] = output_date($key['tanggal']);
		}
		foreach ($prediksi_tanggal as $key) {
			$data[$i++] = output_date($key['tanggal']);
		}

		for ($k=0; $k < $i ; $k++) { 
			$temp = $data[$k];
			$temp = explode(' ',$temp);
			$len = count($temp);
			$temp = $temp[$len-2].' '.$temp[$len-1];
			$data[$k] = $temp;
		}
		return $data;
	}
}

