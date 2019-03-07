<?php
class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function getList(){
        $pst = $this->input->post();
				$get = $this->input->get();

				$query = $this->db->query('SELECT user.id,user.nickname,user.phone,user.sex,user.birthday,user.type_id,user_type.label AS type_name FROM user LEFT JOIN user_type ON user.type_id = user_type.id HAVING user.id > 0 LIMIT 0,10');
				

        $data['data'] = $query->result_array();
        $data['get'] = $get;
        $data['post'] = $pst;

        return $data;

        
    }
}