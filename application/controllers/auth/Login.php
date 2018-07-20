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

    public function validation()
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
            $verified = $res1->verified;
            $id = $res1->id;

            if (password_verify($data['password'], $hash)) {
                if ($verified == 1) {

                    $this->session->set_userdata('id', $id);
                    $this->session->set_userdata('role', $role);

                    $data = array(
                        'ip' => $this->input->ip_address(),
                        'id' => $id
                    );

                    $this->load->model('auth/LoginModel');
                    if ($res2) {
                        switch ($role) {
                            case 1:
                                redirect('farmer/main');
                                break;

                            case 2:
                                redirect('retailer/main');
                                break;

                            case 3:
                                redirect('fpi/main');
                                break;

                            case 4:
                                redirect('storage/main');
                                break;

                            case 5:
                                redirect('transport/main');
                                break;

                            default:
                                break;

                        }
                    } else {
                        $data = array(
                            'error' => '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>User Not Found Please Register And Try Again</div>'
                        );
                        $this->load->view('includes/MainHeader');
                        $this->load->view('auth/Login', $data);
                        $this->load->view('includes/MainFooter');
                    }
                } else {
                    $data = array(
                        'error' => '<div class="alert alert-dismissible alert-secondary">
  <button type="button" class="close" data-dismiss="alert">&times;</button>Email Verification Is Pending Please Check Your Mail And Follow The Procedure</div> '
                    );
                    $this->load->view('includes/MainHeader');
                    $this->load->view('auth/Login', $data);
                    $this->load->view('includes/MainFooter');

                }
            } else {
                $data = array(
                    'error' => '<div class="alert alert-dismissible alert-secondary">
  <button type="button" class="close" data-dismiss="alert">&times;</button>Either Username Or Password Is Incorrect</div>'
                );
                $this->load->view('auth/Login', $data);


            }
        } else {
            $data = array(
                'error' => '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>User Not Found Please Register And Try Again</div>'
            );
            $this->load->view('auth/Login', $data);

        }

    }
}