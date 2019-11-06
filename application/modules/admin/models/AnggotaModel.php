<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnggotaModel extends CI_model
{
	public function getAnggota()
	{
		return $this->db->get('anggota')->result();
	}
}
