<?php 
class Kelaslist extends CI_Controller
{
	// function __construct()
	// {
    //    parent::__construct();
	// }
	public function index()
	{	$x['active'] = 'Kelaslist';
		$this->load->view('v_kelaslist',$x);
		
	}
}