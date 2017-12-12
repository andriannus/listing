<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {

	public $menu = 'first';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('item_model', 'item');
		$this->load->model('first_model', 'first');

		if ($this->session->userdata('login') != true) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'Daftar Produk Masuk';
		$data['page'] = 'first/index';
		$data['query'] = $this->first->get_all()->result_array();
		$data['jumlah'] = $this->first->get_all()->num_rows();

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

	public function edit($id_stokawal)
	{
		$data['title'] = 'Administrator';
		$data['page'] = 'first/edit';
		$data['query'] = $this->item->get_all()->result_array();
		$data['first'] = $this->first->get_one($id_stokawal)->row();

		$this->load->view('core/base_app', $data);
	}

	public function edit_process()
	{
		$id_stokawal = $this->input->post('id_stokawal');

		$data = array(
			'tanggal' => $this->input->post('tanggal'),
			'jumlah' => $this->input->post('jumlah')
		);

		$this->first->update($id_stokawal, $data);
		redirect('first');
	}
}