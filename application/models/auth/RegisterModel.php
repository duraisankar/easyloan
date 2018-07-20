<?php
defined('BASEPATH') OR exit ('no direct script access allowed');

Class RegisterModel extends CI_model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertmaster($mdata)
    {

        $this->db->insert('details', $mdata);

    }
    public function insertlogin($ldata)
    {

        $this->db->insert('login', $ldata);

    }



}