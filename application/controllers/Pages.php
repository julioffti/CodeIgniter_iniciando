<?php

class Pages extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('pages/index', ['pages' =>[]]);
        $this->load->view('template/footer');
    }
}