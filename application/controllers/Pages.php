<?php

class Pages extends CI_Controller
{
    public function index()
    {
        $this->load->model('pages_model');

        $results = $this->pages_model->get();

        $this->load->view('template/header');
        $this->load->view('pages/index', ['pages' => $results]);
        $this->load->view('template/footer');
    }
}