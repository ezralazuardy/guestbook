<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_Landing extends CI_Controller {

	public function index() {
		$this->load->view('component/V_Header');
		$this->load->view('V_Formulir');
		$this->load->view('component/V_Footer');
	}
}