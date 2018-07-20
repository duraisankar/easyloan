<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Head extends CI_Controller {

    public function index()
    {
        $this->load->view('students/includes/Header');
        $this->load->view('students/Dashboard');
        $this->load->view('students/includes/Footer');


    }

    public function apply()
    {
        $this->load->view('Main');
    }
}
