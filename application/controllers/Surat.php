<?php
class Surat extends CI_Controller
{
	function add_new()
	{
		$this->load->view('add_surat_view');
	}

	function __construct()
	{
		parent::__construct();
		$this->load->model('surat_model');
	}

	function index()
	{
		$data['surat'] = $this->surat_model->get_surat();
		$this->load->view('surat_view', $data);
	}

	function save()
	{
		$nomor = $this->input->post('nomor');
		$hal = $this->input->post('hal');
		$dari = $this->input->post('dari');
		$kepada = $this->input->post('kepada');
		$this->surat_model->save($nomor, $hal, $dari, $kepada);
		redirect('surat');
	}


}







