<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
	public function login($user, $pass)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $user);
		$this->db->where('password', $pass);

		$data = $this->db->get();
		
		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}
	}
}
