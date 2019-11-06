<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_model
{
	public function getUser()
	{
		return $this->db->get('user')->result();
	}
}
