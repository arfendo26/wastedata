<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Ion Auth Model
 * @property Ion_auth $ion_auth The Ion_auth library
 */
class Sampah_model extends CI_Model
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
										->get()
										->result_array();
	}
	public function get_prediksi_harga($jenis)
	{
		// return [['harga' => 4200],['harga' =>  3400],['harga' =>  4000],['harga' =>  2300]];
		return $this->db->select('gp.harga')
										->from('garbage_predict gp')
										->join('garbage_list gl','gl.id = gp.jenis' )
										->where('gl.nama',$jenis)
										->get()
										->result_array();
	}
	public function get_tanggal($jenis)
	{
		// return [['tanggal'=>'1 Okt'],['tanggal'=> '2 Okt'],['tanggal'=> '3 Okt'],['tanggal'=> '4 Okt'],['tanggal'=> '5 Okt'],['tanggal'=> '6 Okt']];
		return $this->db->select('gp.tanggal')
										->from('garbage_price gp')
										->join('garbage_list gl','gl.id = gp.jenis')
										->where('gl.nama',$jenis)
										->get()
										->result_array();
	}
	public function get_prediksi_tanggal($jenis)
	{
		// return [['tanggal'=>'7 Okt'],['tanggal'=> '8 Okt'],['tanggal'=> '9 Okt'],['tanggal'=> '10 Okt']];
		return $this->db->select('gp.tanggal')
										->from('garbage_predict gp')
										->join('garbage_list gl','gl.id = gp.jenis')
										->where('gl.nama',$jenis)
										->get()
										->result_array();
	}

	public function get_detail_predict($jenis)
	{
		return $this->db->select('mse, mae, r2')
										->from('garbage_predict gp')
										->join('garbage_list gl','gl.id = gp.jenis')
										->get()
										->result_array()[0];
	}

	public function get_harga_tinggi_rendah($jenis)
	{
		return $this->db->select('MAX(harga) as harga_tertinggi, MIN(harga) as harga_terendah')
										->from('garbage_price gp')
										->join('garbage_list gl','gl.id = gp.jenis' )
										->where('gl.nama',$jenis)
										->get()
										->row_array();
	}


}