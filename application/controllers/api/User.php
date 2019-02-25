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
			->set_content_type('application/json')
			->set_output(json_encode($query, JSON_UNESCAPED_UNICODE))
			->_display();
    }
}