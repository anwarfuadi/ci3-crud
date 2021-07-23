<?php
class Surat_model extends CI_Model
{
	function get_surat()
	{
		$result = $this->db->get('surat');
		return $result;
	}

	function save($nomor, $hal, $dari, $kepada)
	{
		$data = array(
			'nomor' => $nomor,
			'hal' => $hal,
			'dari' => $dari,
			'kepada' => $kepada
		);
		$this->db->insert('surat', $data);
	}
}
