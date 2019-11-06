<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		if ($_SESSION['nim'] == null) {
		redirect(base_url('admin'));
		}
	}

	public function anggota()
	{
		$this->load->model('AnggotaModel');
		$data = array(
			'title' => "Anggota | Himifda",
			'anggota' => $this->AnggotaModel->getAnggota(),
		);
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master_data/anggota');
		$this->load->view('_partials/footer');
	}

	public function periode()
	{
		$this->load->model('PeriodeModel');
		$data = array(
			'title' => "Anggota | Himifda",
			'periode' => $this->PeriodeModel->getPeriode(),
		);
		$this->load->view('_partials/header', $data);
		$this->load->view('_partials/sidebar', $data);
		$this->load->view('_partials/navbar');
		$this->load->view('master_data/periode');
		$this->load->view('_partials/footer');
	}
}
