<?php

class Menu extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {

        $data['data'] = $this->menu_model->getmenu();
        $data['status'] = 'ok';
        $data['code'] = 100;
        $data['msg'] = '菜单列表';

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data, JSON_UNESCAPED_UNICODE))
            ->_display();

        exit();

    }

}
