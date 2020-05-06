<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		if ($this->session->userdata('login') == TRUE) {
			redirect('dashboard');
		}
		$this->load->view('template_login');
	}

	public function cek_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'id_user' => $username,
			'password' => $password
		);

		$data_login = $this->m_login->ambil_data('user', $where);

		$cek = $data_login->num_rows();

		if ($cek > 0) {
			$user = $data_login->row();

			$data_session = array(
				'nama_user' => $user->id_user,
				'level' => $user->level,
				'login' => TRUE
			);

			$this->session->set_userdata($data_session);

			redirect('dashboard', 'refresh');

		} else {
			$this->session->set_flashdata('gagal_login', '<strong>Username</strong> atau <strong>Password</strong> anda salah!');
			redirect('login');
		}
	}

	public function logout()
	{
		$data = array('nama_user', 'level', 'login');
		$this->session->unset_userdata($data);
		redirect('login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */