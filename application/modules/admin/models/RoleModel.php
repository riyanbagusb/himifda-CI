<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoleModel extends CI_model
{
	public function getRole()
	{
		return $this->db->get('role')->result();
	}
}
