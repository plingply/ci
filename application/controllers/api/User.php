<?php

class User extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
    }
    
    public function list(){
        $query = $this->db->query('SELECT nickname,phone,sex,birthday,type_id,user_type.label,class_id,class.name FROM user LEFT JOIN user_type ON user.type_id = user_type.id LEFT JOIN class ON user.class_id = class.id');


		$data['data']   = $query->result_array();

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($data, JSON_UNESCAPED_UNICODE))
			->_display();
		exit();
    }
}