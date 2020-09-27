<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdatePatient extends CI_Controller {

	
	public function index()
	{         
        $this->load->view('updatePatient');          
    }     

    public function update(){
        $id=$this->input->get('id');        
        $name_patient=$this->input->post('name_patient');
        $surname_patient=$this->input->post('surname_patient');
        $identification=$this->input->post('identification');
        $birthdate=$this->input->post('birthdate');
        $city=$this->input->post('city');
        $neighborhood=$this->input->post('neighborhood');
        $cell_phone_number=$this->input->post('cell_phone_number');
        $uPatientModel = array( 
            'id' => $id,           
            'name_patient' => $name_patient, 
            'surname_patient' => $surname_patient,
            'identification' => $identification,
            'birthdate' => $birthdate,
            'city' => $city,
            'neighborhood' => $neighborhood,
            'cell_phone_number' => $cell_phone_number);

            $this->UpdatePatientModel->update($uPatientModel); 

            $redirect = base_url();
            header("location: $redirect");
    }
}