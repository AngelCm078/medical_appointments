<?php

class EditPatientModel extends CI_Model {

	public function Edit($id){
		$response = $this->db->query("SELECT * FROM patient WHERE id=$id")->result();
		return $response[0];
	}
}
?>