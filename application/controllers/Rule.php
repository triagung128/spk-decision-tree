<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rule extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login') != TRUE) {
			redirect('login', 'refresh');
		}
	}

	public function index()
	{
		$data['judul'] = 'Halaman Rule | Aplikasi Identifikasi Varietas Ubi Jalar';
		$this->template->load('template_page', 'v_rule', $data);
	}

}

/* End of file Rule.php */
/* Location: ./application/controllers/Rule.php */