<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Formulir extends CI_Model {

	public function upload($name, $email, $agency, $address, $telephone, $gender, $necessity) {
		if(empty($name) || empty($email) || empty($agency) || empty($telephone) || empty($gender) || empty($necessity)) { return false; }
		$data = array(
			'name' => $name,
			'email' => $email,
			'agency' => $agency,
			'address' => ($address) ? $address : null,
			'telephone' => $telephone,
			'gender' => $gender,
			'necessity' => $necessity
		);
		$this->db->insert('guest_lists', $data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}
}