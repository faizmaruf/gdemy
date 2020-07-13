<?php
class Signup extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->library('upload');
	}
	public function index()
	{
		$x['active'] = 'Signup';
		$this->load->view('v_signup', $x);
	}
	public function simpan_user()
	{
		$email = $this->input->post('xemail');
		$psw1 = $this->input->post('xpassword1');
		$psw2 = $this->input->post('xpassword2');
		if ($psw1 != $psw2) {
			$url = site_url('signup');
			$this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert">Password tidak Valid!</div>');
			redirect($url);
		} else {
			$data = array(
				'email' => $email,
				'user_password' => password_hash($psw1, PASSWORD_DEFAULT)
			);
			$this->m_user->simpan_user($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success d-flex justify-content-center" role="alert">Registrasi Berhasil! Silakan Login.</div>');
			redirect('Signin');
		}
	}
}
