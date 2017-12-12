<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('item_model', 'item');
		$this->load->model('home_model', 'home');
		$this->load->model('user_model', 'user');
	}

	public function index()
	{
		$data['title'] = 'Login Administrator';
		$data['page'] = 'home/login';

		$this->load->view('core/base_app', $data);
	}

	public function login_process()
	{
		$where = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$check = $this->user->check_login($where)->num_rows();

		if ($check > 0) {
			$data_session = array(
				'nama' => $username,
				'login' => true
			);

			$this->session->set_userdata($data_session);
			redirect('home');
		} else {
			echo "Username atau Password salah!";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}