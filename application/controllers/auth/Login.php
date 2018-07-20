<?php
defined('BASEPATH') OR exit ('no direct script access allowed');

Class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'error' => ''
        );

        $this->load->view('auth/Login', $data);

    }

    public function validate()
    {
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');


        $data = array(
            'phone' => $this->input->post('phone'),
            'password' => $this->input->post('password')
        );

        $this->load->model('auth/LoginModel');
        $res1 = $this->LoginModel->verify($data);
        if ($res1) {

            $hash = $res1->password;
            $role = $res1->role;
            $phone = $res1->phone;

            if (password_verify($data['password'], $hash)) {


                    $this->session->set_userdata('phone', $phone);
                    $this->session->set_userdata('role', $role);


                        switch ($role) {
                            case 1:
                                redirect('student/main');
                                break;

                            case 2:
                                redirect('zonal/main');
                                break;

                            case 3:
                                redirect('head/main');
                                break;

                            default:
                                break;

                        }


            }else { echo "pas";}
        } else {

            $data = array(
                'error' => '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>Error</div>'
            );
            $this->load->view('auth/Login', $data);

        }

    }
}