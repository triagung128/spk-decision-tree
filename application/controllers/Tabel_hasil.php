<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabel_hasil extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('login') != TRUE) {
			redirect('login', 'refresh');
		}
		$this->load->model('m_data');
	}

	public function index()
	{
		$data['judul'] = 'Halaman Tabel Hasil | Aplikasi Identifikasi Varietas Ubi Jalar';
		$data['data_hasil'] = $this->m_data->ambil_data('data_ubi')->result_array();
		$this->template->load('template_page', 'v_tabel_hasil', $data);

		$this->session->unset_userdata('hasil');
	}

	public function hapus($id = NULL)
	{
		$this->m_data->hapus_data('data_ubi', $id);
		redirect('tabel_hasil');
	}

}

/* End of file Tabel_hasil.php */
/* Location: ./application/controllers/Tabel_hasil.php */