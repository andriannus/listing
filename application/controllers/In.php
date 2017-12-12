<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class In extends CI_Controller {

	public $menu = 'in';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('item_model', 'item');
		$this->load->model('in_model', 'in');

		if ($this->session->userdata('login') != true) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'Daftar Produk Masuk';
		$data['page'] = 'in/index';
		$data['query'] = $this->in->get_all()->result_array();
		$data['jumlah'] = $this->in->get_all()->num_rows();

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

	public function edit($id_itemterima)
	{
		$data['title'] = 'Administrator';
		$data['page'] = 'in/edit';
		$data['query'] = $this->item->get_all()->result_array();
		$data['in'] = $this->in->get_one($id_itemterima)->row();

		$this->load->view('core/base_app', $data);
	}

	public function edit_process()
	{
		$id_itemterima = $this->input->post('id_itemterima');

		$data = array(
			'tanggal' => $this->input->post('tanggal'),
			'jumlah' => $this->input->post('jumlah')
		);

		$this->in->update($id_itemterima, $data);
		redirect('in');
	}
}