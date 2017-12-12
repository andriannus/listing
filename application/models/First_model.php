<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First_model extends CI_Model {

	public function get_all()
	{
		$query = $this->db->query('select
									id_stokawal, tb_item.nama, tb_stokawal.tanggal, tb_stokawal.jumlah
									from
									tb_item, tb_stokawal
									where
									tb_item.id_item = tb_stokawal.id_item');
		return $query;
	}

	public function get_one($id_stokawal)
	{
		$this->db->where('id_stokawal', $id_stokawal);
		return $this->db->get('tb_stokawal');
	}

	public function insert($data)
	{
		$this->db->insert('tb_stokawal', $data);
	}

	public function delete($id_stokawal)
	{
		$this->db->where('id_stokawal', $id_stokawal);
		$this->db->delete('tb_stokawal');
	}

	public function update($id_stokawal, $data)
	{
		$this->db->where('id_stokawal', $id_stokawal);
		$this->db->update('tb_stokawal', $data);
	}
}