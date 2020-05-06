<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	public function simpan_data($table, $data) {
		$this->db->insert($table, $data);
	}

	public function ambil_data($table) {
		return $this->db->get($table);
	}

	public function hapus_data($table, $id) {
		$where = array('id' => $id);
		$this->db->where($where);
		$this->db->delete($table);
	}

}

/* End of file M_data.php */
/* Location: ./application/models/M_data.php */