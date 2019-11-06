<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MisiModel extends CI_model
{
	public function getMisi()
	{
		return $this->db->get('misi')->result();
	}
}
