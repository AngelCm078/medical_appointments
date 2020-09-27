<?php
error_reporting(0);

defined('BASEPATH') OR exit('No direct script access allowed');

class ListPatientsModel extends CI_Model {

	public function ListPatients(){
		$patients = $this->db->query("SELECT * FROM patient")->result();
		foreach($patients as $patient){
			return $patients;
		}
	}
}