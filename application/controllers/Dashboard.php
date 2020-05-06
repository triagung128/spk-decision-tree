<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login') != TRUE) {
			redirect('login', 'refresh');
		}
	}

	public function index()
	{
		$data['judul'] = 'Halaman Beranda | Aplikasi Identifikasi Varietas Ubi Jalar';
		$this->template->load('template_page', 'v_dashboard', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */