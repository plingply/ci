<?php

class User extends CI_Controller
{
    public function list(){
        $query = $this->db->query('SELECT * FROM `user`');
        echo $query;
    }
}