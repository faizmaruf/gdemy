<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('v_home', ['active' => 'Home']);
    }
}
