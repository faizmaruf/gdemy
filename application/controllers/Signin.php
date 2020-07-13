<?php 
class Signin extends CI_Controller
{
	function __construct()
	{
	   parent::__construct();
	   $this->load->model('m_login');
	}
	public function index()
	{	$x['active'] = 'Signin';
		$this->load->view('v_signin',$x);
		
	}
	function ceklogin()
    {
        $email = strip_tags(str_replace("'", "", $this->input->post('xemail', true)));
        $password = strip_tags(str_replace("'", "", $this->input->post('xpassword', true)));
        $cekuser = $this->m_login->cekuser($email, $password);
        if ($cekuser->num_rows() > 0) {
            $xcekuser = $cekuser->row_array();
            $newdata = array(
                
                'email' => $xcekuser['email'],
                
                
                'logged_in' => true
            );

            $this->session->set_userdata($newdata);
            redirect('user/Index_user');
        } else {
            redirect('home');
        }
    }


}