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
	function update_user()
    {

        $config['upload_path'] = './assets/images/user/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = true; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if (!empty($_FILES['xgambar_user']['name'])) {
            if ($this->upload->do_upload('xgambar_user')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/user/' . $gbr['file_name'];
                $config['create_thumb'] = false;
                $config['maintain_ratio'] = false;
                $config['quality'] = '90%';
                $config['width'] = 500;
                $config['height'] = 400;
                $config['new_image'] = './assets/images/user/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];
                $nama = $this->input->post('xnama');
                $email = $this->input->post('xemail');
                $nuptk = $this->input->post('xnuptk');
                $id = $this->input->post('xid');
                $where = array('id' => $id);

                $data = array(
                    'nama' => $nama,
                    'email' => $email,
                    'nuptk' => $nuptk,
                    'image' => $gambar,
                );


                $this->m_user->update_user($where, $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success d-flex justify-content-center zindex-100" role="alert">Profile berhasil diupdate</div>');
				redirect('user/user/edit_user');




            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger d-flex justify-content-center" role="alert">tak berhasil diupdate</div>');
                redirect('user/user/edit_user');
            }

        }

    }
	function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success d-flex justify-content-center" role="alert">Anda Telah logout!</div>');
		$url = base_url('signin');
		redirect($url);
	}
	
}
