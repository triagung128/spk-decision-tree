<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_input extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('login') != TRUE) {
			redirect('login', 'refresh');
		}
		$this->load->model('m_data');
	}

	public function index()
	{
		$data['judul'] = 'Halaman Form Input | Aplikasi Identifikasi Varietas Ubi Jalar';
		$this->template->load('template_page', 'v_form_input', $data);
	}

	public function proses() {
		// if (isset($POST['submit'])) {
		// 	$this->form_validation->set_rules('berat_umbi', 'Berat Umbi', 'trim|required');
		// 	$this->form_validation->set_rules('jumlah_umbi', 'Jumlah Umbi', 'trim|required');
		// 	$this->form_validation->set_rules('warna_umbi_kulit', 'Warna Umbi Kulit', 'trim|required');
		// 	$this->form_validation->set_rules('warna_umbi_daging', 'Warna Umbi Daging', 'trim|required');
		// 	$this->form_validation->set_rules('tipe_tanaman', 'Tipe Tanaman', 'trim|required');
		// 	$this->form_validation->set_rules('bentuk_daun', 'Bentuk Daun', 'trim|required');
		// 	$this->form_validation->set_rules('warna_daun_tua', 'Warna Daun Tua', 'trim|required');
		// 	$this->form_validation->set_rules('warna_daun_muda', 'Warna Daun Muda', 'trim|required');
		// 	$this->form_validation->set_rules('warna_tangkai_daun', 'Warna Tangkai Daun', 'trim|required');
		// }

		$berat_umbi = $this->input->post('berat_umbi');
		$jumlah_umbi = $this->input->post('jumlah_umbi');
		$warna_umbi_kulit = $this->input->post('warna_umbi_kulit');
		$warna_umbi_daging = $this->input->post('warna_umbi_daging');
		$tipe_tanaman = $this->input->post('tipe_tanaman');
		$bentuk_daun = $this->input->post('bentuk_daun');
		$warna_daun_tua = $this->input->post('warna_daun_tua');
		$warna_daun_muda = $this->input->post('warna_daun_muda');
		$warna_tangkai_daun = $this->input->post('warna_tangkai_daun');

		$hasil = "";

		// if (($warna_umbi_kulit === 'Krem') AND ($warna_tangkai_daun === 'Ungu')) {
		// 	$hasil = "Lokal Banjaran";
		// } elseif (($warna_umbi_kulit === 'Krem') AND ($warna_tangkai_daun === 'Hijau')) {
		// 	$hasil = "Arnet";
		// } elseif (($warna_umbi_kulit === 'Krem') AND ($warna_tangkai_daun === 'Hijau Bintik Ungu')) {
		// 	$hasil = "Kalasan-12";
		// } elseif (($warna_umbi_kulit === 'Krem') AND ($warna_tangkai_daun === 'Hijau Garis Ungu')) {
		// 	$hasil = "Lokal Banjaran";
		// } elseif (($warna_umbi_kulit === 'Putih') AND ($warna_umbi_daging === 'Kuning') AND ($jumlah_umbi <= 1)) {
		// 	$hasil = "Biru Mantang";
		// } elseif (($warna_umbi_kulit === 'Putih') AND ($warna_umbi_daging === 'Kuning') AND ($jumlah_umbi > 1)) {
		// 	$hasil = "Kuning";
		// } elseif (($warna_umbi_kulit === 'Putih') AND ($warna_umbi_daging === 'Kuning Pucat')) {
		// 	$hasil = "Sablah";
		// } elseif (($warna_umbi_kulit === 'Putih') AND ($warna_umbi_daging === 'Putih')) {
		// 	$hasil = "Super";
		// } elseif (($warna_umbi_kulit === 'Putih') AND ($warna_umbi_daging === 'Orange')) {
		// 	$hasil = "Biru Mantang";
		// } elseif (($warna_umbi_kulit === 'Putih') AND ($warna_umbi_daging === 'Krem')) {
		// 	$hasil = "BIS 175-40-26";
		// }  elseif (($warna_umbi_kulit === 'Krem Tua') AND ($berat_umbi <= 1800)) {
		// 	$hasil = "Kentang";
		// }  elseif (($warna_umbi_kulit === 'Krem Tua') AND ($berat_umbi > 1800)) {
		// 	$hasil = "Kalasan";
		// }  elseif (($warna_umbi_kulit === 'Merah') AND ($warna_umbi_daging === 'Kuning') AND ($tipe_tanaman === 'Semi Tegak')) {
		// 	$hasil = "Andoi Atega";
		// }  elseif (($warna_umbi_kulit === 'Merah') AND ($warna_umbi_daging === 'Kuning') AND ($tipe_tanaman === 'Menjalar') AND ($bentuk_daun === 'Jantung')) {
		// 	$hasil = "Andoi Atega";
		// }  elseif (($warna_umbi_kulit === 'Merah') AND ($warna_umbi_daging === 'Kuning') AND ($tipe_tanaman === 'Menjalar') AND ($bentuk_daun === 'Racik')) {
		// 	$hasil = "Retok";
		// }  elseif (($warna_umbi_kulit === 'Merah') AND ($warna_umbi_daging === 'Kuning') AND ($tipe_tanaman === 'Menjalar') AND ($bentuk_daun === 'Segitiga')) {
		// 	$hasil = "Andoi Atega";
		// }  elseif (($warna_umbi_kulit === 'Merah') AND ($warna_umbi_daging === 'Kuning') AND ($tipe_tanaman === 'Tegak')) {
		// 	$hasil = "Lokal Pekalongan";
		// }  elseif (($warna_umbi_kulit === 'Merah') AND ($warna_umbi_daging === 'Kuning') AND ($tipe_tanaman === 'Semi Kompak')) {
		// 	$hasil = "Andoi Atega";
		// }  elseif (($warna_umbi_kulit === 'Merah') AND ($warna_umbi_daging === 'Kuning Pucat')) {
		// 	$hasil = "Andoi Atega";
		// }  elseif (($warna_umbi_kulit === 'Merah') AND ($warna_umbi_daging === 'Putih') AND ($tipe_tanaman === 'Semi Tegak')) {
		// 	$hasil = "Mentang Merah";
		// }  elseif (($warna_umbi_kulit === 'Merah') AND ($warna_umbi_daging === 'Putih') AND ($tipe_tanaman === 'Menjalar')) {
		// 	$hasil = "Mentang Merah";
		// }  elseif (($warna_umbi_kulit === 'Merah') AND ($warna_umbi_daging === 'Putih') AND ($tipe_tanaman === 'Tegak')) {
		// 	$hasil = "Lokal Samarinda";
		// }  elseif (($warna_umbi_kulit === 'Merah') AND ($warna_umbi_daging === 'Putih') AND ($tipe_tanaman === 'Semi Kompak')) {
		// 	$hasil = "Mentang Merah";
		// }  elseif (($warna_umbi_kulit === 'Merah') AND ($warna_umbi_daging === 'Orange')) {
		// 	$hasil = "Andoi Atega";
		// }  elseif (($warna_umbi_kulit === 'Merah') AND ($warna_umbi_daging === 'Krem')) {
		// 	$hasil = "BIS 192-58-69";
		// }  elseif (($warna_umbi_kulit === 'Merah Tua') AND ($tipe_tanaman === 'Semi Tegak')) {
		// 	$hasil = "Jepang-2";
		// }  elseif (($warna_umbi_kulit === 'Merah Tua') AND ($tipe_tanaman === 'Menjalar')) {
		// 	$hasil = "Jepang-2";
		// }  elseif (($warna_umbi_kulit === 'Merah Tua') AND ($tipe_tanaman === 'Tegak')) {
		// 	$hasil = "Lokal Cilacap";
		// }  elseif (($warna_umbi_kulit === 'Merah Tua') AND ($tipe_tanaman === 'Semi Kompak')) {
		// 	$hasil = "Sirihit";
		// } elseif ($warna_umbi_kulit === 'Merah Tua') {
		// 	$hasil = "MIS 159-3";
		// }

		if ($warna_umbi_kulit == "Krem") {

			if ($warna_tangkai_daun == "Ungu") {
				$hasil = "Lokal Banjaran";

			} else if ($warna_tangkai_daun == "Hijau") {
				$hasil = "Arnet";

			} else if ($warna_tangkai_daun == "Hijau Bintik Ungu") {
				$hasil = "Kalasan-12";

			} else if ($warna_tangkai_daun == "Hijau Garis Ungu") {
				$hasil = "Lokal Banjaran";
			}

		} else if ($warna_umbi_kulit == "Krem Tua") {

			if ($warna_umbi_daging == "Kuning") {
				$hasil = "Kalasan";

			} else if ($warna_umbi_daging == "Kuning Pucat") {
				$hasil = "Kalasan";

			} else if ($warna_umbi_daging == "Putih") {
				$hasil = "Kentang";

			} else if ($warna_umbi_daging == "Orange") {
				$hasil = "Kalasan";

			} else if ($warna_umbi_daging == "Krem") {
				$hasil = "Kalasan";
			}

		} else if ($warna_umbi_kulit == "Putih") {

			if ($warna_umbi_daging == "Kuning") {

				if ($tipe_tanaman == "Semi Tegak") {
					$hasil = "Biru Mantang";

				} else if ($tipe_tanaman == "Tegak") {
					$hasil = "Biru Mantang";

				} else if ($tipe_tanaman == "Menjalar") {
					$hasil = "Kuning";

				} else if ($tipe_tanaman == "Semi Kompak") {
					$hasil = "Biru Mantang";
				}

			} else if ($warna_umbi_daging == "Kuning Pucat") {
				$hasil = "Sablah";

			} else if ($warna_umbi_daging == "Putih") {
				$hasil = "Super";

			} else if ($warna_umbi_daging == "Orange") {
				$hasil = "Biru Mantang";

			} else if ($warna_umbi_daging == "Krem") {
				$hasil = "BIS 175-40-26";
			}

		} else if ($warna_umbi_daging == "Merah") {

			if ($warna_umbi_daging == "Kuning") {

				if ($tipe_tanaman = "Semi Tegak") {
					$hasil = "Lokal Pekalongan";

				} else if ($tipe_tanaman = "Tegak") {
					$hasil = "Andoi Atega";

				} else if ($tipe_tanaman = "Menjalar") {
					$hasil = "Andoi Atega";

				} else if ($tipe_tanaman = "Semi Kompak") {
					$hasil = "Retok";
				}

			} else if ($warna_umbi_daging = "Kuning Pucat") {
				$hasil = "Andoi Atega";

			} else if ($warna_umbi_daging = "Putih") {

				if ($tipe_tanaman = "Semi Tegak") {
					$hasil = "Mantang Merah";

				} else if ($tipe_tanaman = "Tegak") {
					$hasil = "Lokal Samarinda";

				} else if ($tipe_tanaman = "Menjalar") {
					$hasil = "Mantang Merah";

				} else if ($tipe_tanaman = "Semi Kompak") {
					$hasil = "Mantang Merah";
				}

			} else if ($warna_umbi_daging = "Orange") {
				$hasil = "Andoi Atega";

			} else if ($warna_umbi_daging = "Krem") {
				$hasil = "BIS 192-58-69";
			}

		} else if ($warna_umbi_daging = "Merah Tua") {

			if ($tipe_tanaman = "Semi Tegak") {
				$hasil = "Jepang-2";

			} else if ($tipe_tanaman = "Tegak") {
				$hasil = "Lokal Cilacap";

			} else if ($tipe_tanaman = "Menjalar") {
				$hasil = "Jepang-2";

			} else if ($tipe_tanaman = "Semi Kompak") {
				$hasil = "Sirihit";
			}

		} else if ($warna_umbi_daging = "Merah Muda") {
			$hasil = "MIS 159-3";
		}

		$data = array(
			'berat' => $berat_umbi,
			'warna_kulit' => $warna_umbi_kulit,
			'warna_daging' => $warna_umbi_daging,
			'tipe' => $tipe_tanaman,
			'bentuk_daun' => $bentuk_daun,
			'warna_daun_tua' => $warna_daun_tua,
			'warna_daun_muda' => $warna_daun_muda,
			'warna_tangkai_daun' => $warna_tangkai_daun,
			'varietas' => $hasil
		);

		$this->m_data->simpan_data('data_ubi', $data);

		$data_hasil = array('hasil' => $hasil);
		$this->session->set_userdata($data_hasil);

		redirect('tabel_hasil');
	}

}

/* End of file Form_input.php */
/* Location: ./application/controllers/Form_input.php */