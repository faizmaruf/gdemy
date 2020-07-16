<?php
class Kelaslist extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_kelas');
		$this->load->library('session');
		$this->load->library('upload');
	}
	public function index()
	{
		$x['tbl_viewkelas'] = $this->m_kelas->getAllViewKelas();
		$x['active'] = 'Kelaslist';
		$this->load->view('v_kelaslist', $x);
	}
}
