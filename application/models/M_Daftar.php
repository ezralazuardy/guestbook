<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Daftar extends CI_Model {

	public function getData() {
        $query = $this->db->select('name, agency, created_at')->get('guest_lists')->result_array();
        return ($query) ? $query : null;
	}
}