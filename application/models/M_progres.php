<?php

class M_progres extends CI_Model
{
    public function getLastLesson($id_kelas, $id_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_progres');
        $this->db->join('tbl_kelas', 'tbl_kelas.id=tbl_progres.');
        return $this->db->get_where('tbl_progres', ['id_kelas' => $id_kelas, 'id_user' => $id_user,])->row_array();
    }
}
