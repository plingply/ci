<?php

class User extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
    }
    
    public function list(){
        $query = $this->db->get('user');

        foreach ($query->result() as $row)
        {
            echo $row->nickname;
        }
    }
}