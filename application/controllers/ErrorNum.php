<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ErrorNum extends CI_Controller {

	
	public function index()
	{   
        $this->load->view('layouts/header');
        $this->load->view('errorNum'); 
        $this->load->view('layouts/footer'); 
    }     

}