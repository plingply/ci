<?php
defined('BASEPATH') or exit('No direct script access allowed');

class V extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('view_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['menu'] = json_encode($this->view_model->getmenu(), JSON_UNESCAPED_UNICODE);
        $this->load->view('index', $data);
    }

    public function aboutus()
    {
        $data['menu'] = json_encode($this->view_model->getmenu(), JSON_UNESCAPED_UNICODE);
        $this->load->view('about', $data);
    }

    public function album()
    {
        $data['menu'] = json_encode($this->view_model->getmenu(), JSON_UNESCAPED_UNICODE);
        $this->load->view('album', $data);
    }

    public function blog()
    {
        $data['menu'] = json_encode($this->view_model->getmenu(), JSON_UNESCAPED_UNICODE);
        $this->load->view('blog', $data);
    }

    public function contact()
    {
        $data['menu'] = json_encode($this->view_model->getmenu(), JSON_UNESCAPED_UNICODE);
        $this->load->view('contact', $data);
    }

}
