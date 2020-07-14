<?php
class M_user extends CI_Model
{

    function get_all_user()
    {
        $hsl = $this->db->get('tbl_users')->result();
        return $hsl;
    }

    function get_all_userById($id)
    {
        return $this->db->get_where('tbl_users', ['id' => $id])->row_array();
    }

    function getuserbyemail($email)
    {
        return $this->db->get_where('tbl_users', ['email' => $email])->row_array();
    }

    function simpan_user($data)
    {
        $this->db->insert('tbl_users', $data);
    }


    //UPDATE user //

    function update_user($where, $data)
    {
        $this->db->where($where);
        $this->db->update("tbl_users", $data);
    }


    //END UPDATE user//



}
