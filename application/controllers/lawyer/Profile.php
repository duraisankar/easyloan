<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('Session_helper');
        is_session_exist(3);

    }
    public function index()
    {
        $this->load->view('lawyer/includes/Header');
        $this->load->view('lawyer/Profile');
        $this->load->view('lawyer/includes/Footer');


    }


}
