<?php
defined('BASEPATH') OR exit ('no direct script access allowed');


function isLogin ()
{
    $ci =& get_instance();
    $id = $ci->session->userdata('phone');
    $role = $ci->session->userdata('role');

    if (isset($id) && isset($role)) {
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

                redirect('auth/login/');
                break;
        }
    }

}


function is_session_exist($r)
{ //to check session

    $ci =& get_instance();
    $role = $ci->session->userdata('role');
    if ($role!=$r) {
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

                redirect('/auth/login/');

                break;

        }
    }

}

