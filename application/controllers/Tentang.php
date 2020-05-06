<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login') != TRUE) {
			redirect('login', 'refresh');
		}
	}

	public function index()
	{
		$data['judul'] = 'Halaman Tentang | Aplikasi Identifikasi Varietas Ubi Jalar';
		$this->template->load('template_page', 'v_tentang', $data);
	}

}

/* End of file Tentang.php */
/* Location: ./application/controllers/Tentang.php */