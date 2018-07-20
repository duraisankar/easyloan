<?php
defined('BASEPATH') OR exit ('no direct script access allowed');

Class LoginModel extends CI_model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verify($data)
    {

        $query1 = "SELECT * FROM  `login` WHERE phone=?";
        $res1 = $this->db->query($query1, array($data['phone']));

        if ($res1->num_rows() == 1) {
            $row = $res1->row();
            return $row;
        } else {
            return false;
        }
    }




}