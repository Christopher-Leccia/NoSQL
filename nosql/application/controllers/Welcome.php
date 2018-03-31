<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('component_model');
    }


    public function index()
    {
        $data['composants'] = $this->component_model->read();

        $this->load->view('index', $data);
    }
}
