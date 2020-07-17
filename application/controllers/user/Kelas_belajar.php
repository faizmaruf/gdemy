<?php
class Kelas_belajar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_kelas');
        $this->load->library('session');
        $this->load->library('upload');
    }
    public function index($id)
    {
        $email = $this->session->userdata('email');
        $x['user'] = $this->m_user->getuserbyemail($email);
        $x['detailkelas'] = $this->m_kelas->getAllDetailKelas($id);
        $x['kelas_sekarang'] = $this->m_kelas->getDetailKelasById($id);
        $x['active'] = 'kelas_belajar';
        $this->load->view('user/v_kelas_belajar', $x);
    }

    public function detailkelas($id)
    {
        $email = $this->session->userdata('email');
        $x['user'] = $this->m_user->getuserbyemail($email);
        $x['detailkelas'] = $this->m_kelas->getAllDetailKelas($id);
        $x['active'] = 'kelas_belajar';
        $this->load->view('user/v_kelas_belajar', $x);
    }
}
