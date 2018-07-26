<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('Session_helper');
        isLogin();
        $this->load->model('auth/RegisterModel');

    }
    public function index()
    {
        $this->load->view('auth/Register');
    }

    public function validate()
    {

        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('rpassword', 'rpassword', 'matches[password]trim|required');

        if ($this->form_validation->run() == true) {
            $password = $this->input->post('password');
            $options = array(
                'cost' => 12
            );
            $password = password_hash($password, PASSWORD_BCRYPT, $options);

            $role = $this->input->post('role');


            if ($role==1) {

                $mdata = array(
                    'id'=>'12',
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'dob' => $this->input->post('dob'),
                    'phone' => $this->input->post('phone')


                );

                $this->RegisterModel->insertstudent($mdata);

                redirect('/signupcomplete');


            }
            if ($role == 2) {

                $mdata = array(
                    'name' => $this->input->post('name'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'dob' => $this->input->post('dob')


                );

                $this->RegisterModel->insertzonal($mdata);
                redirect('/signupcomplete');

            }
            if ($role == 3) {

                $mdata = array(
                    'name' => $this->input->post('name'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'dob' => $this->input->post('dob')


                );

                $this->RegisterModel->insertmanager($mdata);
                redirect('/signupcomplete');


            }
            if ($role == 4) {

                $mdata = array(
                    'name' => $this->input->post('name'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'dob' => $this->input->post('dob')


                );

                $this->RegisterModel->insertmanager($mdata);
                redirect('/signupcomplete');

            }


            $ldata = array(
                'phone' => $this->input->post('phone'),
                'password' => $password,
                'role' => $this->input->post('role')


            );


            $this->RegisterModel->insertlogin($ldata);
            redirect('/signupcomplete');

        }

        else {
            $data = array(
            'error' => 'dgfdfgfg' );
        }

    }


}
