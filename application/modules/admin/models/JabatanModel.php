<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JabatanModel extends CI_model
{
	public function getJabatan()
	{
		return $this->db->get('jabatan')->result();
	}
}
