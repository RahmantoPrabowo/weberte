<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi_model extends CI_Model {


	public function Insert_new_member($data)
	{
				$this->db->insert('member_reguler', $data);
	}



}
