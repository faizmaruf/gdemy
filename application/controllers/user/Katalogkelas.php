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
        
    }
	public function index()
	{	$x['active'] = 'Katalogkelas';
		$this->load->view('user/v_katalog_kelas',$x);
		
	}
	
	

}