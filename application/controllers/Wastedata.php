<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wastedata extends CI_Controller {
	public function __construct()
	{
		parent::__construct();	
		$this->load->model('beranda_model');
	}
	public function index()
	{
		$kategori = $this->beranda_model->get_kategori();
		$cards = [];
		$i = 0;
		foreach ($kategori as $key) {
			$harga = $this->beranda_model->get_harga($key['nama']);
			$len = count($harga);
			$curr_harga = $harga[$len-2]['harga'];
			$prev_harga = $harga[$len-1]['harga'];
			$rate = (($curr_harga-$prev_harga)*100/$prev_harga);
			$cards[$i++] = array(
				'jenis' => $key['nama'],
				'harga' => $curr_harga,
				'rate' => $rate,
				'tren' => (($rate > 0)? 2 : (($rate == 0)? 1 : 0)),
				'link' => base_url('sampah?j='.$key['nama']),
			); 
		}
		$data = array(
				'title' => 'Beranda', 
				'cards' => $cards,
		);

		$this->layout->view('beranda',$data);
	}
}

