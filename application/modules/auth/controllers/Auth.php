<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
	public function index() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nim', 'NIM', 'required|trim|numeric|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		error_reporting(0);
		if ($this->form_validation->run() == FALSE) {
			if ($_SESSION['nim'] != null) {
				redirect(base_url('admin/dashboard'));
			}
			$this->load->view('login');
		} else {
			$this->_login();
		}
	}
	private function _login() {
		$nim = $this->input->post('nim');
		$password = $this->input->post('password');
		$anggota = $this->db->get_where('user', ['nim' => $nim])->row_array();
		if ($anggota) {
			if (password_verify($password, $anggota['password'])) {
				$data = [
					'nama_lengkap' => $anggota['nama_lengkap'],
					'nim' => $anggota['nim'],
					'jabatan_id' => $anggota['jabatan_id'],
					'status' => "login"
				];
				$this->session->set_userdata($data);
				redirect('admin/dashboard');
			} else {
				$this->session->set_flashdata('login', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
				redirect('admin');
			}
		} else {
			$this->session->set_flashdata('login', '<div class="alert alert-danger" role="alert">NIM is not registered!</div>');
			redirect('admin');
		}
	}
	public function logout() {
		$this->session->unset_userdata('nim');
		$this->session->unset_userdata('jabatan_id');
		$this->session->unset_userdata('status');
		$this->session->set_flashdata('login', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('admin');
	
}
}