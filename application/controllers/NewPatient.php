<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewPatient extends CI_Controller {

	
	public function index()
	{   
        $this->load->view('layouts/header');
        $this->load->view('newPatient'); 
        $this->load->view('layouts/footer'); 
    }
    public function create(){

        $min = 1000000000;
        $max = 9999999999;

        if($this->input->post('cell_phone_number')<$min or $this->input->post('cell_phone_number')>$max){

            $redirect = base_url()."ErrorNum";
            header("location: $redirect");
        }        
        else{
            $identification = $_POST['identification'];
            $name_patient = $_POST['name_patient'];
            $surname_patient = $_POST['surname_patient'];
            $birthdate = $_POST['birthdate'];
            $city = $_POST['city'];
            $neighborhood = $_POST['neighborhood'];
            $cell_phone_number = $_POST['cell_phone_number'];
            $patientData = array(            
                'identification' => $identification, 
                'name_patient' => $name_patient, 
                'surname_patient'=>$surname_patient,
                'birthdate'=>$birthdate,
                'city'=>$city,
                'neighborhood'=>$neighborhood,
                'cell_phone_number'=>$cell_phone_number);

            $this->PatientModel->create($patientData);
            $redirect = base_url();
            header("location: $redirect");
        }
    }   

}