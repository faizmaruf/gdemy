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
        $this->load->library('session');
        $this->load->library('upload');
    }
	public function index()
	{	$email =$this->session->userdata('email');
        $x['user']= $this->m_user->getuserbyemail($email);
        $x['active'] = 'Katalogkelas';
		$this->load->view('user/v_katalog_kelas',$x);
		
	}
	
	

}