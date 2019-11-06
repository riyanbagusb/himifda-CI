<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengurusModel extends CI_model
{
	public function getPengurus()
	{
		return $this->db->get('pengurus')->result();
	}
}
