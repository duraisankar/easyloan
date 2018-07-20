<?php
defined('BASEPATH') OR exit ('no direct script access allowed');


function is_session_exist()
{ //to check session

    $ci =& get_instance();
    $id = $ci->session->userdata('id');
    $role = $ci->session->userdata('role');

    if (isset($id) && isset($role)) {
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
    }
}

