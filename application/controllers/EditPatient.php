<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditPatient extends CI_Controller {

	
	public function index()
	{         
        $this->load->view('layouts/header');
        $this->load->view('editPatient'); 
        $this->load->view('layouts/footer');          
    }     

    public function edit(){
        $id=$this->input->get('id');
        $patient = array('editPatient'=> $this->EditPatientModel->Edit($id));
        $this->load->view('layouts/header');
        $this->load->view('editPatient', $patient);
        $this->load->view('layouts/footer'); 
    }
}