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

		$data['data']   = $query;

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($data, JSON_UNESCAPED_UNICODE))
			->_display();
		exit();
    }
}