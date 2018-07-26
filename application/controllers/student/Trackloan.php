<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trackloan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('Session_helper');
        is_session_exist(1);

    }
    public function index()
    {
        $this->load->view('students/includes/Header');
        $this->load->view('students/Trackloan');
        $this->load->view('students/includes/Footer');


    }

    public function id($id)
    {
        $this->load->view('students/includes/Header');
        $this->load->view('students/Loandetails');
        $this->load->view('students/includes/Footer');


    }


}
