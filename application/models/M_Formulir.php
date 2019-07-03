<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Formulir extends CI_Model {

	public function upload($name, $email, $agency, $telephone, $gender, $necessity) {
		if(empty($name) || empty($email) || empty($agency) || empty($telephone) || empty($gender) || empty($necessity)) { return false; }
	}
}