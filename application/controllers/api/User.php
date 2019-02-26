<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function list() {

        $query = $this->db->query('SELECT user.id,user.nickname,user.phone,user.sex,user.birthday,user.type_id,user_type.label AS type_name,user.class_id,class.name AS class_name FROM user LEFT JOIN user_type ON user.type_id = user_type.id LEFT JOIN class ON user.class_id = class.id LIMIT 0,2');

        $data['data'] = $query->result_array();

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data, JSON_UNESCAPED_UNICODE))
            ->_display();
        exit();
    }
}
