<?php 
class Home extends CI_Controller
{
	// public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('m_user');
    //     $this->load->library('upload');
    // }
	public function index()
	{	$x['active'] = 'Home';
		$this->load->view('v_home',$x);
		
	}
	
	

}