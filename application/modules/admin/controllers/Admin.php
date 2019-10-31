<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Admin_model');
		if ($_SESSION['nim'] == null) {
		redirect(base_url('admin'));
		}
	}
	public function dashboard() {
		$data = array(
			'title' => "Dashboard | Himifda",
			'anggota' => $this->db->get_where('anggota', ['nim' => $this->session->userdata('nim')])->row_array(),
		);
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('dashboard');
		$this->load->view('_partials/footer');
	}
	public function faq() {
		$data = array(
			'title' => "FAQ | Himifda",
			'faq' => $this->Admin_model->getFaq(),
		);
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('pages/faq');
		$this->load->view('_partials/footer');
	}
	public function getFaq()
	{
		$id = $this->input->post('id');
		echo json_encode($this->Admin_model->getFaqById($id));
	}
	public function addFaq() {
		$this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required|trim');
		$this->form_validation->set_rules('jawaban', 'Jawaban', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('faq', '<div class="alert alert-danger" role="alert">Tambah FAQ <strong>Gagal!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect(base_url('admin/faq'));
		} else {
			$this->Admin_model->addFaq();
			$this->session->set_flashdata('faq', '<div class="alert alert-success" role="alert">Tambah FAQ <strong>Berhasil!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect(base_url('admin/faq'));
		}
	}
	public function updateFaq() {
		$id = $this->input->post('id');
		$data = [
			'pertanyaan' => $this->input->post('pertanyaan'),
			'jawaban' => $this->input->post('jawaban')
		];
		$this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required|trim');
		$this->form_validation->set_rules('jawaban', 'Jawaban', 'required|trim');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('faq', '<div class="alert alert-danger" role="alert">Ubah FAQ <strong>Gagal!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect(base_url('admin/faq'));
		} else {
			$this->Admin_model->updateFaq($id, $data);
			$this->session->set_flashdata('faq', '<div class="alert alert-success" role="alert">Ubah FAQ <strong>Berhasil!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect(base_url('admin/faq'));
		}
	}
	public function deleteFaq() {
		$id = $this->uri->segment(3);
		$this->Admin_model->deleteFaq($id);
		$this->session->set_flashdata('faq', '<div class="alert alert-success" role="alert">Hapus FAQ <strong>Berhasil!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect(base_url('admin/faq'));
	}
	public function visi_misi() {
		$data = array(
			'title' => "Visi & Misi | Himifda",
			'visi' => $this->Admin_model->getVisi(),
			'misi' => $this->Admin_model->getMisi()
		);
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('pages/visi_misi', $data);
		$this->load->view('_partials/footer');
	}
	public function pengaturan() {
		$data = array(
			'title' => "Pengaturan | Himifda",
			'periodeAktif' => $this->Admin_model->getPeriodeAktif(),
			'periode' => $this->Admin_model->getPeriode(),
			'role' => $this->Admin_model->getRole(),
			'user' => $this->Admin_model->getUser(),
			'anggota' => $this->Admin_model->getAnggota()
		);
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('nim', 'NIM', 'required|trim|numeric|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|matches[password]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('_partials/header', $data);
			$this->load->view('_partials/sidebar', $data);
			$this->load->view('_partials/navbar');
			$this->load->view('pages/pengaturan');
			$this->load->view('_partials/footer');
		} else {
			$data = [
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'nim' => $this->input->post('nim'),
				'role_id' => $this->input->post('role_id'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
			];
			$this->Admin_model->addUser($data);
			$this->session->set_flashdata('user', '<div class="alert alert-success" role="alert">Tambah User <strong>Berhasil!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect(base_url('admin/pengaturan'));
		}
	}
	public function updatePeriode() {
		$id = $this->input->post('id');
		$this->Admin_model->updatePeriode($id);
		$this->session->set_flashdata('faq', '<div class="alert alert-success" role="alert">Ubah Periode <strong>Berhasil!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect(base_url('admin/pengaturan'));
	}
	public function deleteUser() {
		$id = $this->uri->segment(3);
		$this->Admin_model->deleteUser($id);
		$this->session->set_flashdata('user', '<div class="alert alert-success" role="alert">Hapus User <strong>Berhasil!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect(base_url('admin/pengaturan'));
	}
}