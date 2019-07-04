<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_Daftar extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_Daftar');
	}

	public function index() {
		$data['data'] = $this->M_Daftar->getData();
		$this->load->view('component/V_Header');
		$this->load->view('V_Daftar', $data);
		$this->load->view('component/V_Footer');
	}
}