<?php
class M_login extends CI_Model{
    function cekuser($email,$password){
        $hasil=$this->db->query("SELECT * FROM tbl_users WHERE email='$username' AND user_password='$password' ");
        return $hasil;
    }
  
}
