<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Load file model
		$this->load->model('m_mahasiswa');
	}

	public function index()
	{
        $model = $this->m_mahasiswa;
		$data = array();
		$data["mahasiswa"] = $model->get();
		
		$this->load->view('list_mahasiswa', $data);
	}

	public function add(){
        $this->load->view('input_mahasiswa');
    }

	public function create(){ 
		$model = $this->m_mahasiswa;
		$model->create($this->input->post());
		redirect(base_url('/mahasiswa'));
	}

	public function delete(){ 
		$id = $this->uri->segment(3);
		$model = $this->m_mahasiswa;
		$model->delete($id);
		redirect(base_url('/mahasiswa'));
	}
}
