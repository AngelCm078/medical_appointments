<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PatientModel extends CI_Model {


	public function create($patientData){
		$this->db->insert('patient', $patientData);
	}
}