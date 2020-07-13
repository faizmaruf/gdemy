<?php 
class Index_user extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['logged_in'])) {
            $url = base_url('home');
            redirect($url);
        };
        $this->load->model('m_user');
        $this->load->library('upload');
    }
    public function index()
    
	{	
        $x['active'] = 'Index';
		$this->load->view('user/v_index',$x);
		
	}
	
	

}