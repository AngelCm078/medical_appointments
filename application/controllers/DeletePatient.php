<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeletePatient extends CI_Controller {

	
	public function index()
	{ 
        /*       
        $patients = $this->DeletePatientsModel->Delete();
        $deletePatients = array ('patients' => $patients);*/
        $this->load->view('deletePatient');         
    }     

    public function delete()
    {
        $id = $this->input->get('id');
        $this->DeletePatientModel->Delete($id);
        $redirect = base_url();
        header("location: $redirect");
    }
}