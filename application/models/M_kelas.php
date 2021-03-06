<?php

class M_kelas extends CI_Model
{
    // private $_table = 'tbl_viewkelas';
    public function getAllViewKelas()
    {
        return $this->db->get('tbl_viewkelas')->result_array();
    }

    public function getDetailKelasById($id)
    {
        return $this->db->get_where('tbl_detail_kelas', ['id_kelas' => $id])->row_array();
    }
    public function getDetailMateriById($id)
    {
        return $this->db->get_where('tbl_detail_kelas', ['id_materi' => $id])->row_array();
    }

    //simpan ke tbl_pilih kelas
    public function getAllPilihKelas()
    {
        return $this->db->get('tbl_pilihkelas')->result_array();
    }
    public function getAllPilihKelasById($id)
    {
        return $this->db->get_where('tbl_pilihkelas', ['id_viewkelas' => $id])->row_array();
    }

    function getkelasbyId($id, $email)
    {
        return $this->db->query("SELECT * FROM tbl_pilihkelas WHERE id_viewkelas='$id' AND email='$email'")->row_array();
    }

    function getPilihkelasbyemail($email)
    {
        $this->db->like('email', $email);
        // $this->db->query("SELECT * FROM tbl_pilihkelas where 'email' LIKE '$email'");
        return $this->db->get('tbl_pilihkelas')->result_array();
    }

    function get_all_viewkelas_id($id)
    {
        return $this->db->get_where('tbl_viewkelas', ['id_viewkelas' => $id])->row_array();
    }

    function simpanPilihKelas($data)
    {
        $this->db->insert('tbl_pilihkelas', $data);
    }

    //tampilkan data detail materi berdasarkan id viewkelas
    public function getAllDetailKelas($id)
    {
        return $this->db->get_where('tbl_detail_kelas', ['id_kelas' => $id])->result_array();
    }

    function get_all_materi_id($id)
    {
        return $this->db->get_where('tbl_detail_kelas', ['id_materi' => $id])->row_array();
    }
}
