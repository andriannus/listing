<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('item_model', 'item');
		$this->load->model('home_model', 'home');
	}

	public function index()
	{
		$data['title'] = 'Administrator';
		$data['page'] = 'home/index';
		$data['query'] = $this->item->get_all()->result_array();

		$this->load->view('core/base_app', $data);
	}

	public function view()
	{
		$data['title'] = 'Administrator';
		$data['page'] = 'home/view';
		$data['query'] = $this->home->get_all()->result_array();

		$this->load->view('core/base_app', $data);
	}
}