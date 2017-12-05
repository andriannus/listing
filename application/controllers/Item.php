<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

	public $menu = 'item';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('item_model', 'item');
	}

	public function index()
	{
		$data['title'] = 'Administrator';
		$data['page'] = 'item/index';
		$data['query'] = $this->item->get_all()->result_array();

		$this->load->view('core/base_app', $data);
	}

	public function add()
	{
		$data['title'] = 'Administrator';
		$data['page'] = 'item/add';

		$this->load->view('core/base_app', $data);
	}

	public function add_process()
	{
		$data = array(
			'slug' => $this->input->post('slug'),
			'nama' => $this->input->post('nama'),
			'deskripsi' => $this->input->post('deskripsi'),
			'satuan' => $this->input->post('satuan')
		);

		$this->item->insert($data);
		redirect('item');
	}

	public function delete($id_item)
	{
		$this->item->delete($id_item);
		redirect('item');
	}
}