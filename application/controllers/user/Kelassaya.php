<?php
class Kelassaya extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['logged_in'])) {
            $url = base_url('signin');
            redirect($url);
        };
        $this->load->model('m_user');
        $this->load->model('m_kelas');
        $this->load->library('session');
        $this->load->library('upload');
    }
    public function index()
    {
        $email = $this->session->userdata('email');
        $x['user'] = $this->m_user->getuserbyemail($email);

        $x['pilihkelas'] = $this->m_kelas->getPilihkelasbyemail($email);

        $x['active'] = 'Kelassaya';
        $this->load->view('user/v_kelas_saya', $x);
    }
}
