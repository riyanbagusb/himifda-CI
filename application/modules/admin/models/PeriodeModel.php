<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeriodeModel extends CI_model
{
	public function getPeriode()
	{
		return $this->db->get('periode')->result();
	}
}
