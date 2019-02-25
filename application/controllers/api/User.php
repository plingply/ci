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
        $this->output
			->set_output($query)
            ->_display();
            exit();
    }
}