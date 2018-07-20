<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth/RegisterModel');

    }
    public function index()
    {
        $this->load->view('auth/Register');
    }

    public function validate()
    {

        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('mobile', 'mobile', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('rpassword', 'rpassword', 'matches[password]trim|required');

        if ($this->form_validation->run() == true) {
            $password = $this->input->post('password');
            $options = array(
                'cost' => 12
            );
            $password = password_hash($password, PASSWORD_BCRYPT, $options);
            $mdata = array(
                'sno'=>'45',
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone')

            );
            $ldata = array(
                'mobile' => $this->input->post('phone'),
                'password' => $password

            );


            $this->RegisterModel->insertmaster($mdata);
            $this->RegisterModel->insertlogin($ldata);

        }else {
            echo "error";
        }

    }


}
