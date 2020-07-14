<?php
class Katalogkelas extends CI_Controller
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
        $x['tbl_viewkelas'] = $this->m_kelas->getAllViewKelas();
        $x['active'] = 'Katalogkelas';
        $this->load->view('user/v_katalog_kelas', $x);
    }

    public function kelassaya($id)
    {
        $cektblpilihkelas = $this->m_kelas->get_all_viewkelas_id($id);

        $iduser = $this->session->userdata('email');
        $cekuser = $this->m_user->getuserbyemail($iduser);

        $data = array(
            'id_viewkelas' => $cektblpilihkelas['id_viewkelas'],
            'email' => $cekuser['email'],
            'nama_kelas' => $cektblpilihkelas['nama_viewkelas'],
            'deskripsi' => $cektblpilihkelas['deskripsi_viewkelas'],
            'gambar_kelas' => $cektblpilihkelas['gambar_viewkelas']
        );
        $this->m_kelas->simpanPilihKelas($data);
        // redirect('Signin');
        echo 'hai';
    }
}
