<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('item_model', 'item');
		$this->load->model('home_model', 'home');

		if ($this->session->userdata('login') != true) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'Administrator';
		$data['page'] = 'home/index';
		$data['query'] = $this->item->get_all()->result_array();

		$this->load->view('core/base_app', $data);
	}

	public function views()
	{
		$data['title'] = 'Administrator';
		$data['page'] = 'home/views';
		$data['query'] = $this->home->get_all()->result_array();

		$this->load->view('core/base_app', $data);
	}

	public function view($id)
	{
		$data['id'] = $id;

		$bulan = $this->input->get('bulan');
		$tahun = $this->input->get('tahun');

		$bulanBy = $this->input->get('bulanBy');
		$data['bulanBy'] = $bulanBy;

		if(isset($bulan)) {

			if(!empty($tahun)){
				$cek = $this->home->get_by_month_year($id, $bulan, $tahun)->row();

				if(!empty($cek->jumlah_stokawal)) {
					$data['title'] = 'Administrator';
					$data['page'] = 'home/view';
					$data['bulan'] = $bulan;
					$data['tahun'] = $tahun;
					$data['item'] = $this->home->get_nama_item($id)->row();
					$data['query'] = $this->home->get_by_month_year($id, $bulan, $tahun)->result_array();

					$this->load->view('core/base_app', $data);

				} else {
					$data['title'] = 'Administrator';
					$data['page'] = 'home/view';
					$data['bulan'] = $bulan;
					$data['tahun'] = $tahun;
					$data['item'] = $this->home->get_nama_item($id)->row();
					$data['query'] = '';

					$this->load->view('core/base_app', $data);
				}

			} else {
				$cek = $this->home->get_by_month($id, $bulan)->row();

				if(!empty($cek->jumlah_stokawal)) {

					$data['title'] = 'Administrator';
					$data['page'] = 'home/view';
					$data['bulan'] = $bulan;
					$data['item'] = $this->home->get_nama_item($id)->row();
					$data['query'] = $this->home->get_by_month($id, $bulan)->result_array();

					$this->load->view('core/base_app', $data);

				} else {
					$data['title'] = 'Administrator';
					$data['page'] = 'home/view';
					$data['bulan'] = $bulan;
					$data['item'] = $this->home->get_nama_item($id)->row();
					$data['query'] = '';

					$this->load->view('core/base_app', $data);
				}
			}
		} else {
			$data['title'] = 'Administrator';
			$data['page'] = 'home/view';
			$data['item'] = $this->home->get_nama_item($id)->row();
			$data['query'] = $this->home->get_one($id, $bulanBy)->result_array();

			$this->load->view('core/base_app', $data);
		}
	}
}