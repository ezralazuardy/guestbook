<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Formulir extends CI_Model {

	public function upload(
			$name,
			$email,
			$gender,
			$agency,
			$address,
			$telephone,
			$teacherCount,
			$studentCount,
			$visitDate,
			$visitTimeStart,
			$visitTimeEnd,
			$necessity
		) {
		if(	
			empty($name)			||
			empty($email)			||
			empty($gender)			||
			empty($agency)			||
			empty($telephone)		||
			empty($visitDate)		||
			empty($visitTimeStart)	||
			empty($visitTimeEnd)	||
			empty($necessity)
		) {
			return false; 
		}
		$this->db->insert('guest_lists', array(
			'name' => $name,
			'email' => $email,
			'gender' => $gender,
			'agency' => $agency,
			'address' => ($address) ? $address : null,
			'telephone' => $telephone,
			'teacher_count' => $teacherCount,
			'student_count' => $studentCount,
			'visit_date' => $visitDate,
			'visit_time_start' => $visitTimeStart,
			'visit_time_end' => $visitTimeEnd,
			'necessity' => $necessity
		));
		return !($this->db->affected_rows() != 1);
	}
}