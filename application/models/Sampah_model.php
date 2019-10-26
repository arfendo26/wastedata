<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Ion Auth Model
 * @property Ion_auth $ion_auth The Ion_auth library
 */
class Sampah_model extends CI_Model
{
	public function get_harga($table)
	{
		return array(['harga' => 3200],['harga' =>  1900],['harga' =>  3000],['harga' =>  5000],['harga' =>  2000],['harga' =>  3400]);
		return $this->db->select('harga')->get($table)->result_array();
	}
	public function get_prediksi_harga($table)
	{
		return [['harga' => 4200],['harga' =>  3400],['harga' =>  4000],['harga' =>  2300]];
		return $this->db->select('harga')->get($table)->result_array();
	}
	public function get_tanggal($table)
	{
		return [['tanggal'=>'1 Okt'],['tanggal'=> '2 Okt'],['tanggal'=> '3 Okt'],['tanggal'=> '4 Okt'],['tanggal'=> '5 Okt'],['tanggal'=> '6 Okt']];
		return $this->db->select('harga')->get($table)->result_array();
	}
	public function get_prediksi_tanggal($table)
	{
		return [['tanggal'=>'7 Okt'],['tanggal'=> '8 Okt'],['tanggal'=> '9 Okt'],['tanggal'=> '10 Okt']];
		return $this->db->select('harga')->get($table)->result_array();
	}


}