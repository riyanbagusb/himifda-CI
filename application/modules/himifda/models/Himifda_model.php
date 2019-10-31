<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Himifda_model extends CI_model {
#ADD
	public function addKritikSaran()
	{
		$now = date('Y-m-d H:i:s');
		$data = [
			"email" => htmlspecialchars($this->input->post('email', true)),
			"kritik" => htmlspecialchars($this->input->post('kritik', true)),
			"saran" => htmlspecialchars($this->input->post('saran', true)),
			"timestamp" => $now
		];
		$this->db->insert('kritik_saran', $data);
		$this->session->set_flashdata('kritik_saran', 'submitted');
		redirect(base_url());
	}
#GET
	public function getVisi() {
		$this->db->select('*');
		$this->db->from('visi');
		$this->db->join('periode', 'periode.id = visi.periode_id', 'left');
		$this->db->where('periode.status =', 'aktif');
		return $this->db->get()->result();
	}
	public function getMisi() {
		$this->db->select('*');
		$this->db->from('misi');
		$this->db->join('visi', 'visi.id = misi.visi_id', 'left');
		$this->db->join('periode', 'periode.id = visi.periode_id', 'left');
		$this->db->where('periode.status =', 'aktif');
		return $this->db->get()->result();
	}
	public function getFaq() {
		return $this->db->get('faq')->result();
	}
	public function getAnggota() {
		$this->db->select('*');
		$this->db->from('anggota');
		$this->db->join('jabatan', 'jabatan.id = anggota.jabatan_id');
		$this->db->join('periode', 'periode.id = anggota.periode_id', 'left');
		$this->db->where('kode_bidang !=', 'DPO');
		$this->db->where('kode_bidang !=', 'ANGGOTA');
		$this->db->where('periode.status =', 'aktif');
		$query = $this->db->get();
		return $query->result();
	}
	public function getEvent($limit, $start) {
		$query = $this->db->get('event', $limit, $start);
		return $query->result();
	}
	public function countEvent() {
		$query = $this->db->get('event');
		return $query->num_rows();
	}
	public function getEventBySlug($slug) {
		$this->db->select('*');
		$this->db->from('event');
		$this->db->join('anggota', 'event.anggota_id = anggota.id', 'left');
		$this->db->where('slug =', $slug);
		$query = $this->db->get();
		return $query->row();
	}
}