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
        $cektblviewkelas = $this->m_kelas->get_all_viewkelas_id($id);
        $email = $this->session->userdata('email');
        $cekuser = $this->m_user->getuserbyemail($email);

        $cekidkelas = $this->m_kelas->getKelasById($id, $email);

        $x['user'] = $cekuser;
        $x['detailkelas'] = $this->m_kelas->getAllDetailKelas($id);
        $x['kelas_sekarang'] = $this->m_kelas->getDetailKelasById($id);

        //cek user udah milih kelas yang sama atau belum
        if ($cekidkelas) {
            //kalo user udah milih kelas yang sama
            $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert">User Hanya Bisa memilih kelas yang sama satu kali</div>');
            redirect('user/katalogkelas', $x);
        } else {
            // kalo user belom pernah milih
            $data = array(
                'id_viewkelas' => $cektblviewkelas['id_viewkelas'],
                'email' => $cekuser['email'],
                'nama_kelas' => $cektblviewkelas['nama_viewkelas'],
                'deskripsi' => $cektblviewkelas['deskripsi_viewkelas'],
                'gambar_kelas' => $cektblviewkelas['gambar_viewkelas']
            );
            $this->m_kelas->simpanPilihKelas($data);
            redirect('user/kelas_belajar/detailkelas/' . $cektblviewkelas['id_viewkelas'], $x);
        }
    }
}
