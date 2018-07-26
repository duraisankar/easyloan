<?php
defined('BASEPATH') OR exit ('no direct script access allowed');

Class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('Session_helper');
        isLogin();

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
                                redirect('student/');
                                break;

                            case 2:
                                redirect('zonal/');
                                break;

                            case 3:
                                redirect('lawyer/');
                                break;

                            case 4:
                                redirect('engineer/');
                                break;

                            default:

                                break;

                        }


            }else { $data = array(
                'error' => '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Password or Username Incorrect!
              </div>'
            );
                $this->load->view('auth/Login', $data);}
        } else {

            $data = array(
                'error' => '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Password or Username Incorrect!
              </div>'
            );
            $this->load->view('auth/Login', $data);

        }

    }
}