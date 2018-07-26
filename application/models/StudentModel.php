<?php
defined('BASEPATH') OR exit ('no direct script access allowed');

Class StudentModel extends CI_model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getstddetails($data)
    {

        $query1 = "SELECT * FROM  `student_details` WHERE phone=?";
        $res1 = $this->db->query($query1, array($data['phone']));

        if ($res1->num_rows() == 1) {
            $row = $res1->row();
            return $row;
        } else {
            return false;
        }
    }




}