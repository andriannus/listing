<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class In_model extends CI_Model {

	public function get_all()
	{
		$query = $this->db->query('select
									id_itemterima, tb_item.nama, tb_itemterima.tanggal, tb_itemterima.jumlah
									from
									tb_item, tb_itemterima
									where
									tb_item.id_item = tb_itemterima.id_item');
		return $query;
	}

	public function get_one($id_itemterima)
	{
		$this->db->where('id_itemterima', $id_itemterima);
		return $this->db->get('tb_itemterima');
	}


	public function insert($data)
	{
		$this->db->insert('tb_itemterima', $data);
	}

	public function delete($id_itemterima)
	{
		$this->db->where('id_itemterima', $id_itemterima);
		$this->db->delete('tb_itemterima');
	}

	public function update($id_itemterima, $data)
	{
		$this->db->where('id_itemterima', $id_itemterima);
		$this->db->update('tb_itemterima', $data);
	}
}