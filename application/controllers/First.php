<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('item_model', 'item');
		$this->load->model('first_model', 'first');
	}

	public function index()
	{
		$data['title'] = 'Daftar Produk Masuk';
		$data['page'] = 'first/index';
		$data['query'] = $this->first->get_all()->result_array();

		$this->load->view('core/base_app', $data);
	}

	public function add()
	{
		$data['title'] = 'Produk Masuk';
		$data['page'] = 'first/add';
		$data['query'] = $this->item->get_all()->result_array();

		$this->load->view('core/base_app', $data);
	}

	public function add_process()
	{
		$data = array(
			'id_item' => $this->input->post('id_item'),
			'tanggal' => $this->input->post('tanggal'),
			'jumlah' => $this->input->post('jumlah')
		);

		$this->first->insert($data);
		redirect('first');
	}

	public function delete($id_stokawal)
	{
		$this->first->delete($id_stokawal);
		redirect('first');
	}
}