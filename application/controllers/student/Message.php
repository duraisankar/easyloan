<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('Session_helper');
        is_session_exist(1);

    }
    public function index()
    {
        $this->load->view('students/includes/Header');
        $this->load->view('students/Message');
        $this->load->view('students/includes/Footer');


    }


}
