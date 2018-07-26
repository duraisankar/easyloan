<?php
defined('BASEPATH') OR exit ('no direct script access allowed');

Class RegisterModel extends CI_model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertstudent($mdata)
    {

        $this->db->insert('student_details', $mdata);

    }
    public function insertzonal($mdata)
    {

        $this->db->insert('zonal_details', $mdata);

    }

    public function insertmanager($mdata)
    {

        $this->db->insert('manager_details', $mdata);

    }

    public function insertlawyer($mdata)
    {

        $this->db->insert('lawyer_details', $mdata);

    }

    public function insertengineer($mdata)
    {

        $this->db->insert('engineer_details', $mdata);

    }

    public function insertlogin($ldata)
    {

        $this->db->insert('login', $ldata);

    }



}