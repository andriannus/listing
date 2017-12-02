<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Out_model extends CI_Model {

	public function get_all()
	{
		$query = $this->db->query('select
									id_itempakai, tb_item.nama, tb_itempakai.tanggal, tb_itempakai.jumlah
									from
									tb_item, tb_itempakai
									where
									tb_item.id_item = tb_itempakai.id_item');
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tb_itempakai', $data);
	}

	public function delete($id_itempakai)
	{
		$this->db->where('id_itempakai', $id_itempakai);
		$this->db->delete('tb_itempakai');
	}
}