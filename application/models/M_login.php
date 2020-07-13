<?php
class M_login extends CI_Model
{
    function cekuser($email)
    {
        $hasil = $this->db->query("SELECT * FROM tbl_users WHERE email='$email'");
        return $hasil;
    }
}
