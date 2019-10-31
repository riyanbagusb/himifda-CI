<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Himifda extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Himifda_model');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('kritik', 'Kritik', 'required|trim|min_length[10]');
		$this->form_validation->set_rules('saran', 'Saran', 'required|trim|min_length[10]');
	}
	public function index() {
		$meta = array(
			'title' => "Himifda",
			'description' => "Himpunan Mahasiswa Informatika Universitas Darma Persada",
			'keywords' => "himifda"
		);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('_partials/header', $meta);
			$this->load->view('_partials/navigation');
			$this->load->view('_partials/social');
			$this->load->view('home');
			$this->load->view('_partials/footer');
		} else {
			$this->Himifda_model->addKritikSaran();
		}
	}
	public function visi_misi() {
		$meta = array(
			'title' => "Visi & Misi | Himifda",
			'description' => "Visi & Misi Himpunan Mahasiswa Informatika Universitas Darma Persada",
			'keywords' => "visi, misi"
		);
		$data['visi'] = $this->Himifda_model->getVisi();
		$data['misi'] = $this->Himifda_model->getMisi();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('_partials/header', $meta);
			$this->load->view('_partials/navigation');
			$this->load->view('_partials/social');
			$this->load->view('pages/visi_misi', $data);
			$this->load->view('_partials/footer');
		} else {
			$this->Himifda_model->addKritikSaran();
		}
	}
	public function struktur_organisasi() {
		$meta = array(
			'title' => "Struktur Organisasi | Himifda",
			'description' => "Struktur Organisasi Himpunan Mahasiswa Informatika Universitas Darma Persada",
			'keywords' => "struktur, organisasi, struktural"
		);
		$data['anggota'] = $this->Himifda_model->getAnggota();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('_partials/header', $meta);
			$this->load->view('_partials/navigation');
			$this->load->view('_partials/social');
			$this->load->view('pages/struktur_organisasi', $data);
			$this->load->view('_partials/footer');
		} else {
			$this->Himifda_model->addKritikSaran();
		}
	}
	public function event() {
		$meta = array(
			'title' => "Event | Himifda",
			'description' => "Event Himpunan Mahasiswa Informatika Universitas Darma Persada",
			'keywords' => "event, kegiatan"
		);
		$config['base_url'] = base_url().'event';
		$config['total_rows'] = $this->Himifda_model->countEvent();
		$config['per_page'] = 4;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = floor($choice);
		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<nav aria-label="Page navigation example"><ul class="pagination">';
        $config['full_tag_close']   = '</ul></nav>';
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class ="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></li>';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tagl_close']  = 'Next</li>';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tagl_close']  = '</li>';
        $config['attributes'] = array('class' => 'page-link');
		$this->pagination->initialize($config);
		$data['page'] = $this->uri->segment(2);
		$data['event'] = $this->Himifda_model->getEvent($config['per_page'], $data['page']);
		$data['pagination'] = $this->pagination->create_links();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('_partials/header', $meta);
			$this->load->view('_partials/navigation');
			$this->load->view('_partials/social');
			$this->load->view('pages/event', $data);
			$this->load->view('_partials/footer');
		} else {
			$this->Himifda_model->addKritikSaran();
		}
	}
	public function detail_event($slug) {
		$data['event'] = $this->Himifda_model->getEventBySlug($slug);
		$meta = array(
			'title' => $data['event']->judul." | Himifda",
			'description' => $data['event']->meta_description,
			'keywords' => $data['event']->meta_keywords.", event, kegiatan"
		);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('_partials/header', $meta);
			$this->load->view('_partials/navigation');
			$this->load->view('_partials/social');
			$this->load->view('pages/detail_event', $data);
			$this->load->view('_partials/footer');
		} else {
			$this->Himifda_model->addKritikSaran();
		}
	}
	public function modul() {
		$meta = array(
			'title' => "Modul | Himifda",
			'description' => "Modul Himpunan Mahasiswa Informatika Universitas Darma Persada",
			'keywords' => "modul, materi"
		);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('_partials/header', $meta);
			$this->load->view('_partials/navigation');
			$this->load->view('_partials/social');
			$this->load->view('pages/modul');
			$this->load->view('_partials/footer');
		} else {
			$this->Himifda_model->addKritikSaran();
		}
	}
	public function faq() {
		$meta = array(
			'title' => "Frequently Asked Question | Himifda",
			'description' => "Frequently Asked Question Himpunan Mahasiswa Informatika Universitas Darma Persada",
			'keywords' => "Frequently, asked, question, faq, pertanyaan, jawaban, tanya, jawab"
		);
		$data['faq'] = $this->Himifda_model->getFaq();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('_partials/header', $meta);
			$this->load->view('_partials/navigation');
			$this->load->view('_partials/social');
			$this->load->view('pages/faq', $data);
			$this->load->view('_partials/footer');
		} else {
			$this->Himifda_model->addKritikSaran();
		}
	}
}