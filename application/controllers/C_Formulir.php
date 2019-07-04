<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_Formulir extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_Formulir');
	}

	public function index() {
		$this->load->view('component/V_Header');
		$this->load->view('V_Formulir');
		$this->load->view('component/V_Footer');
	}

	public function upload() {
		$response['success'] = false;
		$name = xss_trim($this->input->post('name'));
		$email = xss_trim($this->input->post('email'));
		$agency = xss_trim($this->input->post('agency'));
		$address = ($this->input->post('address')) ? xss_trim($this->input->post('address')) : null;
		$telephone = xss_trim($this->input->post('gender'));
		$gender = xss_trim($this->input->post('gender'));
		$necessity = xss_trim($this->input->post('necessity'));
		if(isset($name) && isset($email) && isset($agency) && isset($telephone) && isset($gender) && isset($necessity)) {
			$result = $this->M_Formulir->upload($name, $email, $agency, $address, $telephone, $gender, $necessity);
			if($result) { $response['success'] = true; }
		}
		echo json_encode($response);
	}
}