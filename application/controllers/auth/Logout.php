<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {


    public function index()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('role');
        $this->session->sess_destroy();
        redirect('auth/Login');
    }
    public function restrict()
    {
        $this->load->view('includes/MainHeader');

    }

}
