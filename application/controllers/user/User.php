<?php
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->library('session');
		$this->load->library('upload');
	}
	public function index()
	{
		$x['active'] = 'Home';
		$this->load->view('v_home', $x);
	}
	function edit_user()
	{
		$email = $this->session->userdata('email');
		$x['user'] = $this->m_user->getuserbyemail($email);
		$x['active'] = 'edit_user';
		$this->load->view('user/v_edit_user', $x);
	}
	function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex justify-content-center" role="alert">Anda Telah logout!</div>');
		$url = base_url('signin');
		redirect($url);
	}
}
