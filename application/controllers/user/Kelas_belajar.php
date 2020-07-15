<?php
class Kelas_belajar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->library('session');
        $this->load->library('upload');
    }
    public function index()
    {
        $email = $this->session->userdata('email');
        $x['user'] = $this->m_user->getuserbyemail($email);
        $x['active'] = 'kelas_belajar';
        $this->load->view('user/v_kelas_belajar', $x);
        // echo 'hai';
    }
}
