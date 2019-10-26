<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wastedata extends CI_Controller {
	public function index()
	{
		$data = array(
				'title' => 'Beranda', 
		);

		$this->layout->view('beranda',$data);
	}
}

