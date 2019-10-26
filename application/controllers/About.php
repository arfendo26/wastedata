<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index($kategori = NULL)
	{
		
		$data = array(
				'title' => 'Tentang Kami', 
		);
		$this->layout->view('about',$data);
	}
}

