<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Out extends CI_Controller {

	public $menu = 'out';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('item_model', 'item');
		$this->load->model('out_model', 'out');

		if ($this->session->userdata('login') != true) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'Daftar Produk Masuk';
		$data['page'] = 'out/index';
		$data['query'] = $this->out->get_all()->result_array();
		$data['jumlah'] = $this->out->get_all()->num_rows();

		$this->load->view('core/base_app', $data);
	}

	public function add()
	{
		$data['title'] = 'Produk Masuk';
		$data['page'] = 'out/add';
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

		$this->out->insert($data);
		redirect('out');
	}

	public function delete($id_itempakai)
	{
		$this->out->delete($id_itempakai);
		redirect('out');
	}

	public function edit($id_itempakai)
	{
		$data['title'] = 'Administrator';
		$data['page'] = 'out/edit';
		$data['query'] = $this->item->get_all()->result_array();
		$data['out'] = $this->out->get_one($id_itempakai)->row();

		$this->load->view('core/base_app', $data);
	}

	public function edit_process()
	{
		$id_itempakai = $this->input->post('id_itempakai');

		$data = array(
			'tanggal' => $this->input->post('tanggal'),
			'jumlah' => $this->input->post('jumlah')
		);

		$this->out->update($id_itempakai, $data);
		redirect('out');
	}
}