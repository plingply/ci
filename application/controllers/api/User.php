<?php

class User extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
    }
    
    public function list(){
        $query = $this->db->query('SELECT * FROM user');
        echo $query;
    }
}