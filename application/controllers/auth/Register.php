<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

    }
    public function index()
    {
        $this->load->view('auth/Register');
    }

    public function validate()
    {
        $this->load->view('auth/Register');

    }


}
