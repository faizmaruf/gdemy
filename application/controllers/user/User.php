<?php 
class User extends CI_Controller
{
	// function __construct()
	// {
    //    parent::__construct();
	// }
	public function index()
	{	$x['active'] = 'Home';
		$this->load->view('v_home',$x);
		
	}
	function logout()
    {
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex justify-content-center" role="alert">Anda Telah logout!</div>');
        $url = base_url('signin');
        redirect($url);
    }

}