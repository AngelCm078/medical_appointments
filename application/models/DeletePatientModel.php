<?php

class DeletePatientModel extends CI_Model {	

	public function Delete($id){
	$response = $this->db->query("DELETE FROM patient WHERE id={$id}");
	}	
}
?>