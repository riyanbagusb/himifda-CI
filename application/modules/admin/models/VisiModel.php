<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VisiModel extends CI_model
{
	public function getVisi()
	{
		return $this->db->get('visi')->result();
	}
}
