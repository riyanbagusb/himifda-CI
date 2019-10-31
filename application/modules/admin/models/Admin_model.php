<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_model {
	public function getFaq() {
		return $this->db->get('faq')->result();
	}
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
	public function addFaq() {
		$data = [
			'pertanyaan' => $this->input->post('pertanyaan'),
			'jawaban' => $this->input->post('jawaban')
		];
		$this->db->insert('faq', $data);
		$this->session->set_flashdata('faq', 'submitted');
	}
	public function getFaqById($id) {
		return $this->db->query('SELECT * FROM faq WHERE id = '.$id)->row();
	}
	public function updateFaq($id, $data) {
		$this->db->where('id', $id);
		$this->db->update('faq', $data);
		$this->session->set_flashdata('faq', 'updated');
	}
	public function deleteFaq($id) {
		$this->db->where('id', $id);
		$this->db->delete('faq');
		$this->session->set_flashdata('faq', 'deleted');
	}
	public function getPeriodeAktif() {
		return $this->db->query("SELECT * FROM periode WHERE status = 'aktif'")->row();
	}
	public function getPeriode() {
		$this->db->from('periode');
		$this->db->order_by('periode', 'desc');
		return $this->db->get()->result();
	}
	public function updatePeriode($id) {
		$data = [
			'status' => 'aktif'
		];
		$dota = [
			'status' => 'selesai'
		];
		$this->db->where('id', $id);
		$this->db->update('periode', $data);
		$this->db->where('id !=', $id);
		$this->db->update('periode', $dota);
		$this->session->set_flashdata('periode', 'updated');
	}
	public function getRole() {
		$this->db->from('role');
		$this->db->order_by('role', 'desc');
		return $this->db->get()->result();
	}
	public function getUser() {
		$this->db->from('user');
		$this->db->join('role', 'user.role_id = role.id', 'left');
		$this->db->order_by('nim', 'asc');
		return $this->db->get()->result();
	}
	public function addUser($data) {
		$this->db->insert('user', $data);
	}
	public function getAnggota() {
		$this->db->from('anggota');
		$this->db->order_by('nim', 'desc');
		return $this->db->get()->result();
	}
	public function deleteUser($id) {
		$this->db->where('id', $id);
		$this->db->delete('user');
		$this->session->set_flashdata('user', 'deleted');
	}
}