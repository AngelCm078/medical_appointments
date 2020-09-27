<?php

class UpdatePatientModel extends CI_Model {

	public function update($uPatientModel){

		$response=$this->db->query("UPDATE patient 
        SET name_patient= '{$uPatientModel['name_patient']}',
            surname_patient='{$uPatientModel['surname_patient']}',
            identification='{$uPatientModel['identification']}',
            birthdate='{$uPatientModel['birthdate']}',
            city='{$uPatientModel['city']}',
            neighborhood='{$uPatientModel['neighborhood']}',
            cell_phone_number='{$uPatientModel['cell_phone_number']}'
        WHERE id='{$uPatientModel['id']}'");  
	}
}
