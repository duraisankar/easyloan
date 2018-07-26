<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('Session_helper');

        is_session_exist(2);

    }
    public function index()
    {
        $this->load->view('zonal/includes/Header');
        $this->load->view('zonal/Dashboard');
        $this->load->view('zonal/includes/Footer');


    }


}
