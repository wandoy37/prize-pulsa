<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('m_data');

		// cek session yang login, 
		// jika session status tidak sama dengan session telah_login, berarti pengguna belum login
		// maka halaman akan di alihkan kembali ke halaman login.
		if ($this->session->userdata('status') != "telah_login") {
			redirect(base_url() . 'login?alert=belum_login');
		}
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_index');
		$this->load->view('dashboard/v_footer');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login?alert=logout');
	}
}
