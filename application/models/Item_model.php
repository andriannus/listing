<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {

	public function get_all()
	{
		return $this->db->get('tb_item');
	}

	public function get_one($id_item)
	{
		$this->db->where('id_item', $id_item);
		return $this->db->get('tb_item');
	}

	public function insert($data)
	{
		$this->db->insert('tb_item', $data);
	}

	public function delete($id_item)
	{
		$this->db->where('id_item', $id_item);
		$this->db->delete('tb_item');
	}

	public function update($id_item, $data)
	{
		$this->db->where('id_item', $id_item);
		$this->db->update('tb_item', $data);
	}
}