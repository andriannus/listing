<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function get_all()
	{
		$this->db->select('tb_item.nama, tb_item.deskripsi, tb_item.satuan, tb_stokawal.jumlah as jumlah_stokawal, tb_itemterima.jumlah as jumlah_terima, tb_itempakai.jumlah as jumlah_pakai');
		$this->db->from('tb_item');
		$this->db->join('tb_stokawal', 'tb_item.id_item = tb_stokawal.id_item');
		$this->db->join('tb_itemterima', 'tb_item.id_item = tb_itemterima.id_item');
		$this->db->join('tb_itempakai', 'tb_item.id_item = tb_itempakai.id_item');
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tb_itemterima', $data);
	}
}