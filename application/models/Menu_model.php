<?php
class Menu_model extends M_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getmenu(){
        $query = $this->db->query('SELECT * FROM menu WHERE open = 1');
        $data = $query->result_array();
        return $data;
    }
}