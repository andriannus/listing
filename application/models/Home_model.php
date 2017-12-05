<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function get_all()
	{
		$this->db->select('	tb_item.nama,
							tb_item.deskripsi,
							tb_item.satuan,
							tb_stokawal.jumlah as jumlah_stokawal,
							tb_itemterima.jumlah as jumlah_terima,
							tb_itempakai.jumlah as jumlah_pakai ');
		$this->db->from('tb_item');
		$this->db->join('tb_stokawal', 'tb_item.id_item = tb_stokawal.id_item');
		$this->db->join('tb_itemterima', 'tb_item.id_item = tb_itemterima.id_item');
		$this->db->join('tb_itempakai', 'tb_item.id_item = tb_itempakai.id_item');
		$this->db->where('
							month(tb_stokawal.tanggal) = month(tb_itemterima.tanggal) &&
							month(tb_stokawal.tanggal) = month(tb_itempakai.tanggal)
						');
		$query = $this->db->get();
		return $query;
	}

	public function get_one($id)
	{
		$this->db->select('	tb_item.nama,
							tb_item.deskripsi,
							tb_item.satuan,
							sum(tb_stokawal.jumlah) as jumlah_stokawal,
							tb_itemterima.jumlah as jumlah_terima,
							tb_itempakai.jumlah as jumlah_pakai ');
		$this->db->from('tb_item');
		$this->db->join('tb_stokawal', 'tb_item.id_item = tb_stokawal.id_item');
		$this->db->join('tb_itemterima', 'tb_item.id_item = tb_itemterima.id_item');
		$this->db->join('tb_itempakai', 'tb_item.id_item = tb_itempakai.id_item');
		$this->db->where('
							tb_item.id_item = '.$id.' &&
							month(tb_stokawal.tanggal) = month(tb_itemterima.tanggal) &&
							month(tb_stokawal.tanggal) = month(tb_itempakai.tanggal)
						');
		$query = $this->db->get();
		return $query;
	}

	public function get_by_month($id, $bulan)
	{
		$this->db->select('	tb_item.nama,
							tb_item.deskripsi,
							tb_item.satuan,
							sum(tb_stokawal.jumlah) as jumlah_stokawal,
							tb_itemterima.jumlah as jumlah_terima,
							tb_itempakai.jumlah as jumlah_pakai ');
		$this->db->from('tb_item');
		$this->db->join('tb_stokawal', 'tb_item.id_item = tb_stokawal.id_item');
		$this->db->join('tb_itemterima', 'tb_item.id_item = tb_itemterima.id_item');
		$this->db->join('tb_itempakai', 'tb_item.id_item = tb_itempakai.id_item');
		$this->db->where(array(
							'tb_item.id_item' => $id,
							'month(tb_stokawal.tanggal)' => $bulan,
							'month(tb_itemterima.tanggal)' => $bulan,
							'month(tb_itempakai.tanggal)' => $bulan
							)
						);
		$query = $this->db->get();
		return $query;
	}

	public function get_by_month_year($id, $bulan, $tahun)
	{
		$this->db->select('	tb_item.nama,
							tb_item.deskripsi,
							tb_item.satuan,
							sum(tb_stokawal.jumlah) as jumlah_stokawal,
							tb_itemterima.jumlah as jumlah_terima,
							tb_itempakai.jumlah as jumlah_pakai ');
		$this->db->from('tb_item');
		$this->db->join('tb_stokawal', 'tb_item.id_item = tb_stokawal.id_item');
		$this->db->join('tb_itemterima', 'tb_item.id_item = tb_itemterima.id_item');
		$this->db->join('tb_itempakai', 'tb_item.id_item = tb_itempakai.id_item');
		$this->db->where(array(
							'tb_item.id_item' => $id,
							'month(tb_stokawal.tanggal)' => $bulan,
							'month(tb_itemterima.tanggal)' => $bulan,
							'year(tb_itempakai.tanggal)' => $tahun,
							'year(tb_stokawal.tanggal)' => $tahun,
							'year(tb_itemterima.tanggal)' => $tahun,
							'year(tb_itempakai.tanggal)' => $tahun
							)
						);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tb_itemterima', $data);
	}

	public function get_nama_item($id)
	{
		$this->db->where('id_item', $id);
		$nama_item = $this->db->get('tb_item');
		return $nama_item;
	}
}