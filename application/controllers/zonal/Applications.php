<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applications extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('Session_helper');

        is_session_exist(2);

    }
    public function index()
    {
        $this->load->view('zonal/includes/Header');
        $this->load->view('zonal/Applications/Pending');
        $this->load->view('zonal/includes/Footer');


    }
    public function pending()
    {
        $this->load->view('zonal/includes/Header');
        $this->load->view('zonal/Applications/Pending');
        $this->load->view('zonal/includes/Footer');


    }
    public function approved()
    {
        $this->load->view('zonal/includes/Header');
        $this->load->view('zonal/Applications/Approved');
        $this->load->view('zonal/includes/Footer');


    }
    public function rejected()
    {
        $this->load->view('zonal/includes/Header');
        $this->load->view('zonal/Applications/Rejected');
        $this->load->view('zonal/includes/Footer');


    }

    public function loan($id)
    {
        $this->load->view('zonal/includes/Header');
        $this->load->view('zonal/LoanForm');
        $this->load->view('zonal/includes/Footer');


    }




}
