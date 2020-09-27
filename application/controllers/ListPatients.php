<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListPatients extends CI_Controller {
	
	public function index()
	{     
        $patients = $this->ListPatientsModel->ListPatients();
        $listPatients = array ('patients' => $patients);

        $this->load->view('layouts/header');
        $this->load->view('listPatients', $listPatients); 
        $this->load->view('layouts/footer'); 
    }
}