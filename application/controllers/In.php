<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class In extends CI_Controller {

	public $menu = 'in';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('item_model', 'item');
		$this->load->model('in_model', 'in');
	}

	public function index()
	{
		$data['title'] = 'Daftar Produk Masuk';
		$data['page'] = 'in/index';
		$data['query'] = $this->in->get_all()->result_array();

		$this->load->view('core/base_app', $data);
	}

	public function add()
	{
		$data['title'] = 'Produk Masuk';
		$data['page'] = 'in/add';
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

		$this->in->insert($data);
		redirect('in');
	}

	public function delete($id_itemterima)
	{
		$this->in->delete($id_itemterima);
		redirect('in');
	}
}