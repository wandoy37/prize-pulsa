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
		$data['pengunjung'] = $this->m_data->get_data('pengunjung')->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_index', $data);
		$this->load->view('dashboard/v_footer');
	}

	public function pengunjung_edit($id)
	{
		$where = array(
			'pengunjung_id' => $id
		);
		$data['title'] = 'Edit Status';
		$data['pengunjung'] = $this->m_data->edit_data($where, 'pengunjung')->result();
		$this->load->view('dashboard/v_header', $data);
		$this->load->view('dashboard/v_pengunjung_edit', $data);
		$this->load->view('dashboard/v_footer');
	}

	public function pengunjung_update()
	{
		$this->form_validation->set_rules('status', 'Status', 'required');

		if ($this->form_validation->run() != false) {

			$id = $this->input->post('id');
			$status = $this->input->post('status');

			$where = array(
				'pengunjung_id' => $id
			);

			$data = array(
				'pengunjung_status' => $status
			);

			$this->m_data->update_data($where, $data, 'pengunjung');
			redirect(base_url() . 'dashboard?alert=berhasil_update');
		} else {
			redirect(base_url() . 'dashboard?alert=gagal_update');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login?alert=logout');
	}
}
