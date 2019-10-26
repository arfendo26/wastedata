<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wastedata extends CI_Controller {
	public function index()
	{
		$data = array(
				'title' => 'Beranda', 
		);

		$this->layout->view('about',$data);
	}
	public function detail($kategori = NULL){
		if (empty($kategori)) {
			redirect('');
		}
		$data = array(
				'title' => 'Detil Harga '.$kategori, 
		);
		$this->layout->view('detail_sampah',$data);
	}
}

