<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sampah extends CI_Controller {
	public function index($kategori = NULL)
	{
		if (empty($kategori)) {
			redirect('');
		}
		$data = array(
				'title' => 'Detil Harga '.$kategori, 
		);
		$this->layout->view('detail_sampah',$data);

		
	}
}

