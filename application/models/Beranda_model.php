<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Ion Auth Model
 * @property Ion_auth $ion_auth The Ion_auth library
 */
class Beranda_model extends CI_Model
{
	public function get_kategori()
	{
		return $this->db->select('nama')->get('garbage_list')->result_array();
	}

	public function get_harga($jenis)
	{
		// return array(['harga' => 3200],['harga' =>  1900],['harga' =>  3000],['harga' =>  5000],['harga' =>  2000],['harga' =>  3400]);
		return $this->db->select('gp.harga')
										->from('garbage_price gp')
										->join('garbage_list gl','gl.id = gp.jenis' )
										->where('gl.nama',$jenis)
										->order_by('gp.tanggal','DESC')
										->limit(2,0)
										->get()
										->result_array();
	}
	public function get_prediksi_harga($jenis)
	{
		return [['harga' => 4200],['harga' =>  3400],['harga' =>  4000],['harga' =>  2300]];
		return $this->db->select('harga')->get($table)->result_array();
	}
	public function get_tanggal($jenis)
	{
		// return [['tanggal'=>'1 Okt'],['tanggal'=> '2 Okt'],['tanggal'=> '3 Okt'],['tanggal'=> '4 Okt'],['tanggal'=> '5 Okt'],['tanggal'=> '6 Okt']];
		return $this->db->select('gp.tanggal')
										->from('garbage_price gp')
										->join('garbage_list gl','gl.id = gp.jenis')
										->where('gl.nama',$jenis)
										->order_by('gp.tanggal','DESC')
										->limit(2,0)
										->get()
										->result_array();
	}
	public function get_prediksi_tanggal($jenis)
	{
		return [['tanggal'=>'7 Okt'],['tanggal'=> '8 Okt'],['tanggal'=> '9 Okt'],['tanggal'=> '10 Okt']];
		return $this->db->select('harga')->get($table)->result_array();
	}
}